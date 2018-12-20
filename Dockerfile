FROM php:7.2

COPY ./docker/install-composer.sh /usr/local/bin/install-composer.sh

RUN apt-get update \
    && apt-get install wget git zip unzip \
    && chmod +x /usr/local/bin/install-composer.sh \
    && /usr/local/bin/install-composer.sh

RUN docker-php-ext-install pcntl

COPY . /php-resque

# RUN composer install --no-interaction