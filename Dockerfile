FROM composer:2.8 AS phpbuilder

WORKDIR /app
COPY composer.json composer.lock auth.json ./
RUN composer install --no-interaction --no-progress --ignore-platform-reqs

FROM node:20-alpine AS nodebuilder

WORKDIR /app
COPY web/app/themes/tu-delft /app/
RUN npm install && npm run build

FROM php:8.2-fpm-bullseye

# TODO: prune unnecessary deps
RUN apt-get update && apt-get install -y \
    nginx supervisor libpng-dev libjpeg-dev libfreetype6-dev libzip-dev zip unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli zip opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY ./web /var/www/html/web
COPY ./config /var/www/html/config
COPY .htaccess wp-cli.yml phpcs.xml /var/www/html/

# Get dependencies from composer step
COPY --from=phpbuilder /app/vendor /var/www/html/vendor

# Get theme assets from node step
COPY --from=nodebuilder /app/dist /var/www/html/web/app/themes/tu-delft/build

# TODO: remove this step once this file is produced by node build step
COPY assets/tailwind.css /var/www/html/web/app/themes/tu-delft/build/tailwind.css?ver=6.5.3

# Nginx
RUN rm /etc/nginx/sites-enabled/default
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Supervisord config
COPY docker/supervisord/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

WORKDIR /var/www/html/web
EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
