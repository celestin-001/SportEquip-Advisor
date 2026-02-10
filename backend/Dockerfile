FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip\
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

WORKDIR /var/www

COPY . .

RUN chown -R www-data:www-data /var/www