FROM php:7.2.4-fpm

# Libs
RUN apt-get update && apt-get install -y libmcrypt-dev curl git zip unzip \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install zip \
    && docker-php-ext-install gd

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# PHPUnit
WORKDIR /tmp
RUN composer selfupdate && \
    composer require "phpunit/phpunit:~7.1.4" --prefer-source --no-interaction && \
    ln -s /tmp/vendor/bin/phpunit /usr/local/bin/phpunit

WORKDIR /var/www
# RUN composer update && \
#     php artisan migrate --seed