FROM php:8.3-fpm-alpine

RUN apk add mysql-client && docker-php-ext-install mysqli pdo_mysql

COPY ./app /var/www/html

WORKDIR /var/www/html

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

EXPOSE 9000

