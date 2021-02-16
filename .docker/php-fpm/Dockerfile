FROM php:7.2-fpm as scratch

ARG APP_ENV
ENV APP_ENV=${APP_ENV}

# Add php config
COPY .docker/php-fpm/php_${APP_ENV}.ini /usr/local/etc/php/php.ini
COPY .docker/php-fpm/www.conf /usr/local/etc/php-fpm.d/www.conf

#MAKE tmp WRITABLE
RUN chmod 777 -R /tmp && chmod o+t -R /tmp

WORKDIR /var/www/html

# DEV env (local)
FROM scratch as dev

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

FROM scratch as test

# PROD env (kubernetes)
FROM scratch as prod

# RUN /usr/bin/composer install --no-ansi --no-dev -n --no-plugins --no-progress --no-scripts --no-suggest -o \
#    && chown -R www-data:www-data .


USER www-data:www-data
CMD ["php-fpm"]
EXPOSE 9000