<p align="center">
  <a href="https://roots.io/bedrock/">
    <img alt="Bedrock" src="https://cdn.roots.io/app/uploads/logo-bedrock.svg" height="100">
  </a>
</p>

<p align="center">
  <a href="https://packagist.org/packages/roots/bedrock">
    <img alt="Packagist Installs" src="https://img.shields.io/packagist/dt/roots/bedrock?label=projects%20created&colorB=2b3072&colorA=525ddc&style=flat-square">
  </a>

  <a href="https://packagist.org/packages/roots/wordpress">
    <img alt="roots/wordpress Packagist Downloads" src="https://img.shields.io/packagist/dt/roots/wordpress?label=roots%2Fwordpress%20downloads&logo=roots&logoColor=white&colorB=2b3072&colorA=525ddc&style=flat-square">
  </a>
  
  <img src="https://img.shields.io/badge/dynamic/json.svg?url=https://raw.githubusercontent.com/roots/bedrock/master/composer.json&label=wordpress&logo=roots&logoColor=white&query=$.require[%22roots/wordpress%22]&colorB=2b3072&colorA=525ddc&style=flat-square">

  <a href="https://github.com/roots/bedrock/actions/workflows/ci.yml">
    <img alt="Build Status" src="https://img.shields.io/github/actions/workflow/status/roots/bedrock/ci.yml?branch=master&logo=github&label=CI&style=flat-square">
  </a>

  <a href="https://twitter.com/rootswp">
    <img alt="Follow Roots" src="https://img.shields.io/badge/follow%20@rootswp-1da1f2?logo=twitter&logoColor=ffffff&message=&style=flat-square">
  </a>
</p>

<p align="center">WordPress boilerplate with Composer, easier configuration, and an improved folder structure</p>

<p align="center">
  <a href="https://roots.io/bedrock/">Website</a> &nbsp;&nbsp; <a href="https://roots.io/bedrock/docs/installation/">Documentation</a> &nbsp;&nbsp; <a href="https://github.com/roots/bedrock/releases">Releases</a> &nbsp;&nbsp; <a href="https://discourse.roots.io/">Community</a>
</p>

## Sponsors

Bedrock is an open source project and completely free to use. If you've benefited from our projects and would like to support our future endeavors, please consider [sponsoring Roots](https://github.com/sponsors/roots).

<div align="center">
<a href="https://k-m.com/"><img src="https://cdn.roots.io/app/uploads/km-digital.svg" alt="KM Digital" width="120" height="90"></a> <a href="https://carrot.com/"><img src="https://cdn.roots.io/app/uploads/carrot.svg" alt="Carrot" width="120" height="90"></a> <a href="https://wordpress.com/"><img src="https://cdn.roots.io/app/uploads/wordpress.svg" alt="WordPress.com" width="120" height="90"></a> <a href="https://worksitesafety.ca/careers/"><img src="https://cdn.roots.io/app/uploads/worksite-safety.svg" alt="Worksite Safety" width="120" height="90"></a> <a href="https://www.freave.com/"><img src="https://cdn.roots.io/app/uploads/freave.svg" alt="Freave" width="120" height="90"></a>
</div>

## Overview

Bedrock is a WordPress boilerplate for developers that want to manage their projects with Git and Composer. Much of the philosophy behind Bedrock is inspired by the [Twelve-Factor App](http://12factor.net/) methodology, including the [WordPress specific version](https://roots.io/twelve-factor-wordpress/).

- Better folder structure
- Dependency management with [Composer](https://getcomposer.org)
- Easy WordPress configuration with environment specific files
- Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
- Autoloader for mu-plugins (use regular plugins as mu-plugins)
- Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

## Getting Started

See the [Bedrock installation documentation](https://roots.io/bedrock/docs/installation/).

## Stay Connected

- Join us on Discord by [sponsoring us on GitHub](https://github.com/sponsors/roots)
- Participate on [Roots Discourse](https://discourse.roots.io/)
- Follow [@rootswp on Twitter](https://twitter.com/rootswp)
- Read the [Roots Blog](https://roots.io/blog/)
- Subscribe to the [Roots Newsletter](https://roots.io/newsletter/)

## Current Architecture

The stack is composed as follows:
<img src="./assets/scheme.svg"/>

- Apache handles inbound traffic, acting as a reverse proxy
  - HTTP requests are forwarded to 443
  - HTTPS request are TLS terminated and forwarded to NGINX
  - certificates are locally installed
- NGINX listens on its internal 80 port, managing the WordPress instance
- The MySQL instance is in support of WordPress, not exposed to the host machine.

### Configuration

- Apache is consuming the `/etc/apache2/sites-available/reverse-proxy.conf` file.
- NGINX configuration is under `./docker/nginx/default.conf`
- MySQL usually restores a dump when intialized, then needs its env file to setup credentials.

See also the `compose.yml` file for a more detailed view.

## Docker 

### Image
Be sure to have cloned the plugin repo in the `web/app/plugins/tudelft-tutorial-platform-plugin` folder.

The image can be built with the following command:

```
docker build . \ 
  --secret id=composer_secret,src=auth.json \
  -t tudelft/tutorial-platform-wordpress:latest
```

where `auth.json` holds your Composer credentials.

As you can see in the Dockerfile, there's a multistage build that compose the whole:
- a base `composer` image to fetch PHP depencencies
- a base `node` image to build the theme
- finally, a PHP + NGINX image assemble the final image. NGINX and PHP fpm are executed as separate processes, managed by `Supervisord`.

> Note: The current build is designed to be independent, allowing for scalable deployments. You can still remove NGINX, delegating it to a separate container.

### Compose stack
Root folder holds a `compose.yml` file that aims to provide a local setup. You need some resources before starting it:

1. a dump for MySQL, to be placed in `./sql/local.sql`
2. an `.env` file with all necessary variables filled. You can find a template in `.env.example`.
3. (optional) you might have to restore a backup of the `wp-content` folder if you want to be able to see the loaded images, otherwise you'll get some empty spaces.

Then, you can start the whole stack with `docker compose up` and visit the platform on http://localhost:8000.

You'll get:
- a container with the custom WP instance
- a MySql instance
- an Adminer instance, useful to browse the DB content.
