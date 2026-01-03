FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev \
    libonig-dev libxml2-dev

RUN docker-php-ext-install pdo pdo_mysql mbstring zip bcmath gd

RUN a2enmod rewrite

WORKDIR /var/www/html
COPY . .

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader || true
RUN cp .env.example .env

RUN chmod -R 777 storage bootstrap/cache

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/*.conf
