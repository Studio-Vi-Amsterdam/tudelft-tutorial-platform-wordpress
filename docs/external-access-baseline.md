# Restoring external access: TU Delft security baseline

After the October 2026 vulnerabilities (PHP, Node.js, nginx, Linux kernel), TU Delft
blocked external access to many systems. They remain reachable on campus and via
eduVPN. To get external access back, **each server** (development, staging,
production) must meet the Security baseline and be requested separately in Topdesk.

Source: intranet page "Externe toegang tot je TU Delft-systeem herstellen" and the
*baseline handleiding* linked from it. Where this runbook says "per the handleiding",
use the TU Delft document; it holds the installers, keys and addresses that are not
in this repository.

## The requirements at a glance

| Eis | Requirement | Section |
|---|---|---|
| B1 Gescand | Rapid7 Scan Assistant installed, scanner reaches `21047/tcp`, last successful scan ≤ 7 days old | [B1](#b1--rapid7-scan-assistant) |
| B2–B4 Bijgewerkt | All security updates installed and server rebooted; InsightVM shows no open crisis vulnerabilities, nothing with CVSS ≥ 9.0, nothing with a known exploit | [B2–B4](#b2b4--updates-and-reboot) |
| B5 Ondersteunde software | No end-of-life OS or software | [B5](#b5--no-end-of-life-software) |
| B6 Contact | Technical contact with e-mail and mobile number | [B6](#b6--technical-contact) |
| B9 Bewaakt | Splunk forwarder installed (EDR only required on Windows) | [B9](#b9--splunk-forwarder) |

Recommended order: 0 → B2–B4 → B5 → B1 → B9 → wait for a clean scan → request.

The commands below assume Ubuntu/Debian (the Apache config uses
`sites-available` and `${APACHE_LOG_DIR}`). Run them as a user with `sudo`.

---

## 0. Inventory and network exposure

```bash
cat /etc/os-release          # OS and release
uname -r                     # running kernel
apache2 -v                   # Apache version
docker ps --format 'table {{.Names}}\t{{.Image}}\t{{.Ports}}'
sudo ss -tlnp                # everything listening on TCP
```

**Goal:** from outside, only `80`, `443` and (from the Rapid7 scanner only) `21047`
should be reachable. Anything else the scanner finds is attack surface and may
produce findings.

### Bind containers to loopback

The server does not use this repo's `compose.yml`; it uses the
`docker-compose.yml` in the deploy directory (`REPO_ASSETS_PATH` secret in the
deploy workflows). Edit the `ports:` entries there to match the repo:

```yaml
  platform:
    ports:
      - 127.0.0.1:8000:80     # was 8000:80 — bypassed Apache TLS
  adminer:
    ports:
      - 127.0.0.1:9090:8080   # was 9090:8080 — public DB login page
```

Better still, remove the `adminer` service from the server compose file entirely
and only start it when needed. Reach it via an SSH tunnel:

```bash
ssh -L 9090:127.0.0.1:9090 <user>@<server>   # then open http://localhost:9090
```

Apply and verify:

```bash
cd <REPO_ASSETS_PATH>
docker compose up -d
sudo ss -tlnp | grep -E ':8000|:9090'   # must show 127.0.0.1, not 0.0.0.0 or [::]
```

> Docker publishes ports by editing iptables directly, which **bypasses ufw**.
> Binding to `127.0.0.1` is the reliable fix; a ufw rule alone is not.

### Host firewall

Ask the ServiceDesk / Security for the Rapid7 scanner source address(es), then:

```bash
sudo ufw default deny incoming
sudo ufw default allow outgoing
sudo ufw allow from <campus/eduVPN range> to any port 22 proto tcp
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp
sudo ufw allow from <rapid7-scanner-ip> to any port 21047 proto tcp
sudo ufw enable
sudo ufw status verbose
```

Make sure the SSH rule is in place **before** `ufw enable`, or you lock yourself out.

---

## B2–B4 — Updates and reboot

### Host OS (includes kernel, Apache, OpenSSL)

```bash
sudo apt update
sudo apt full-upgrade -y
sudo apt autoremove --purge -y
ls /var/run/reboot-required && cat /var/run/reboot-required.pkgs
sudo reboot
```

After reboot:

```bash
uname -r                       # must be the newly installed kernel
apt list --upgradable          # should be empty
```

Keep security updates flowing so B2 does not regress before the next scan:

```bash
sudo apt install -y unattended-upgrades
sudo dpkg-reconfigure -plow unattended-upgrades
```

Reboots after kernel updates are still manual — schedule them.

### Apache hardening

The vhost template is in [`apache/reverse-proxy.conf`](../apache/reverse-proxy.conf)
(now restricted to TLS 1.2/1.3). Copy those lines into
`/etc/apache2/sites-available/reverse-proxy.conf`. Then hide version banners in
`/etc/apache2/conf-available/security.conf`:

```apache
ServerTokens Prod
ServerSignature Off
TraceEnable Off
```

```bash
sudo a2enconf security
sudo apachectl configtest && sudo systemctl reload apache2
curl -sI https://<server> | grep -i '^server:'      # should say just "Apache"
```

Check TLS from your laptop: `nmap --script ssl-enum-ciphers -p 443 <server>`
should list only TLSv1.2 and TLSv1.3.

### Containers (PHP, nginx, Alpine packages, MySQL)

The WordPress image runs `apk upgrade` at build time, so it is only as current as
its last build. Trigger a fresh build on `development` (or wait for the weekly
cache-bust build), then deploy that tag via the deploy workflow. On the server:

```bash
docker compose pull db && docker compose up -d db   # refresh MySQL image
docker image prune -f
docker exec platform-wordpress php -v
docker exec platform-wordpress nginx -v
docker exec <db-container> mysql --version
```

### Confirm in InsightVM

After the next scan, open the asset in Rapid7 InsightVM and confirm:

- no open vulnerabilities marked as crisis,
- none with CVSS ≥ 9.0,
- none with a known exploit (filter on *Exploits* / *Malware kits*).

Anything left: fix it (usually a package update) and let the next scan confirm.
If a finding is a false positive or not applicable, talk to your faculty ISO.

---

## B5 — No end-of-life software

| Component | Check | Status / action |
|---|---|---|
| Host OS | `cat /etc/os-release`, compare to the vendor's support dates (e.g. `ubuntu-security-status` / `pro status` on Ubuntu) | Upgrade the release if it no longer receives security updates |
| PHP | `docker exec platform-wordpress php -v` | **PHP 8.2 security support ends 31 Dec 2026.** Plan the move to PHP 8.4 before then, or the server will fail B5 at the next review |
| Node.js | build stage only | Moved from Node 20 (EOL) to Node 24 in the `Dockerfile`; not present in the runtime image |
| MySQL | `docker exec <db> mysql --version` | 8.0.x is EOL (April 2026). The `mysql:8` tag now resolves to 8.4 LTS — pull it again (see above) and verify |
| WordPress & plugins | wp-admin → Updates | Core and all plugins on supported, current versions; remove unused plugins |
| Apache, OpenSSL | covered by the OS release | — |

---

## B1 — Rapid7 Scan Assistant

1. Download the Linux Scan Assistant installer and the TU Delft configuration
   (certificate/key) per the handleiding.
2. Install it and make sure the service starts on boot.
3. Verify it is listening:

   ```bash
   sudo ss -tlnp | grep 21047
   systemctl list-units --type=service | grep -i -E 'rapid7|scan'
   ```

4. Open `21047/tcp` for the scanner only (see the [firewall](#host-firewall)
   section).
5. Wait for a scan to run, or ask for one, and confirm in InsightVM that it
   **succeeded** (authenticated, not just a network scan). When you submit the
   request, the last successful scan must be **at most 7 days old**.

---

## B9 — Splunk forwarder

1. Install the Splunk Universal Forwarder per the handleiding (it holds the
   package, deployment-server address and any credentials). It usually installs to
   `/opt/splunkforwarder`.
2. Enable start on boot and check status:

   ```bash
   sudo /opt/splunkforwarder/bin/splunk enable boot-start
   sudo /opt/splunkforwarder/bin/splunk status
   ```

3. Make sure at least these host logs are forwarded (the deployment server
   usually pushes this config; check with Security):
   - `/var/log/auth.log` (SSH logins, sudo)
   - `/var/log/syslog`
   - `/var/log/apache2/access.log` and `error.log` (all external traffic passes
     through Apache)

The nginx logs inside the WordPress container are not on the host disk. Because
Apache in front already logs every external request, the Apache logs are enough
for monitoring.

EDR is only mandatory on Windows; it does not apply to this Linux server.

---

## B6 — Technical contact

Name a technical contact who knows the system and can make technical changes:
name, e-mail address and **mobile number**. This goes in the Topdesk request.

---

## Submitting the request

Checklist per server:

- [ ] Only 80/443 public, 21047 for the scanner only; 8000/9090 on loopback
- [ ] OS fully updated and rebooted; fresh image deployed
- [ ] Apache: TLS 1.2/1.3 only, `ServerTokens Prod`
- [ ] No EOL software (OS, PHP, MySQL, WordPress plugins)
- [ ] Rapid7 Scan Assistant running; last successful scan ≤ 7 days old
- [ ] InsightVM: no crisis, no CVSS ≥ 9.0, no known-exploit findings
- [ ] Splunk forwarder running and enabled at boot
- [ ] Technical contact (e-mail + mobile) ready

Then submit a request in **Topdesk**, one per server. No feedback after two
working days? Contact your faculty ISO or FIM and give them the call numbers.
Only they can get the status from the ICT ServiceDesk. The feedback says why the
system is not yet accessible and what to fix.

For a risk analysis, contact your faculty ISO. For help with the requirements,
contact the ServiceDesk.
