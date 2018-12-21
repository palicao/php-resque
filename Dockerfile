FROM php:7.2

# install some common packages
RUN apt-get update \
    && apt-get install -yqq wget git zip unzip procps

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

# install composer
COPY ./docker/install-composer.sh /tmp/install-composer.sh
RUN chmod +x /tmp/install-composer.sh \
    && /tmp/install-composer.sh

RUN docker-php-ext-install pcntl \
    && pecl install xdebug \
    && echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20170718/xdebug.so" >> /usr/local/etc/php/php.ini

COPY . /php-resque

# RUN composer install --no-interaction