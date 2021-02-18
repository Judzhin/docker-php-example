FROM php:7.2-fpm as scratch

ARG APP_ENV
ENV APP_ENV=${APP_ENV}

# Add php config
COPY .docker/php-fpm/php_${APP_ENV}.ini /usr/local/etc/php/php.ini
COPY .docker/php-fpm/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN apt-get update && apt-get install -y wget \
    && chmod 777 -R /tmp && chmod o+t -R /tmp

RUN wget https://getcomposer.org/installer -O - -q \
    | php -- --install-dir=/bin --filename=composer --quiet \
ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/html

# DEV env (local)
FROM scratch as dev

RUN pecl install xdebug-2.9.8 \
# RUN pecl install xdebug \
    # && docker-php-ext-enable xdebug
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# COPY .docker/php-fpm/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

FROM scratch as test

# PROD env (kubernetes)
FROM scratch as prod

# RUN /usr/bin/composer install --no-ansi --no-dev -n --no-plugins --no-progress --no-scripts --no-suggest -o \
#    && chown -R www-data:www-data .


USER www-data:www-data
CMD ["php-fpm"]
EXPOSE 9000