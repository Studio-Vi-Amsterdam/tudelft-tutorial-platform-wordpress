FROM composer:2.10 AS phpbuilder

WORKDIR /app
COPY composer.json composer.lock ./
RUN --mount=type=secret,id=composer_secret,env=COMPOSER_AUTH composer install --no-interaction --no-progress --ignore-platform-reqs
COPY web/app/mu-plugins/tudelft-tutorial-platform-plugin .
FROM node:20-alpine AS nodebuilder

WORKDIR /app
COPY web/app/themes/tu-delft /app/
RUN npm install && npm run build

FROM php:8.2.35-fpm-alpine

# Changes weekly in CI so cached layers pick up Alpine security updates
ARG APK_CACHE_BUST

# Build deps are removed after compiling; only the shared libs the extensions link against stay.
RUN apk upgrade --no-cache \
    && apk add --no-cache nginx supervisor zip unzip \
    && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
        freetype-dev libjpeg-turbo-dev libpng-dev libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli zip opcache \
    && runDeps="$(scanelf --needed --nobanner --format '%n#p' --recursive /usr/local/lib/php/extensions \
        | tr ',' '\n' | sort -u \
        | awk 'system("[ -e /usr/local/lib/" $1 " ]") == 0 { next } { print "so:" $1 }')" \
    && apk add --no-cache --virtual .php-ext-rundeps $runDeps \
    && apk del --no-network .build-deps

# Keep www-data on uid/gid 33 (Debian's) so existing uploads volumes stay writable
RUN deluser www-data \
    && addgroup -g 33 -S www-data \
    && adduser -u 33 -S -D -H -G www-data -h /var/www www-data

COPY ./web /var/www/html/web
COPY ./config /var/www/html/config
COPY .htaccess wp-cli.yml phpcs.xml /var/www/html/

# Get dependencies from composer step
COPY --from=phpbuilder /app/vendor /var/www/html/vendor
COPY --from=phpbuilder /app/web/ /var/www/html/web/

# Get theme assets from node step
COPY --from=nodebuilder /app/dist /var/www/html/web/app/themes/tu-delft/dist

# TODO: remove this step once this file is produced by node build step
COPY assets/tailwind.css /var/www/html/web/app/themes/tu-delft/dist/tailwind.css

# Nginx
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf

# Supervisord config
COPY docker/supervisord/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

WORKDIR /var/www/html/web
EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
