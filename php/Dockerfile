FROM php:7.3-apache
COPY ./php.ini /usr/local/etc/php/
RUN apt-get update \
    && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
    && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv
