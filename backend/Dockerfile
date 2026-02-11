FROM php:8.2-fpm

# Installer les dépendances système et PHP
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libonig-dev libxml2-dev curl \
    && docker-php-ext-install pdo pdo_mysql zip

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

# Copier tout le projet d'abord
COPY . .

# Installer les dépendances PHP via Composer
RUN composer install --no-dev --optimize-autoloader

# Assurer les bons droits
RUN chown -R www-data:www-data /var/www

# Installer Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
