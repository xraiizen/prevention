FROM php:8.2-fpm

# Installer les extensions nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    libonig-dev \
    zip \
    curl \
    unzip \
    git \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

CMD ["php-fpm"]

EXPOSE 9000
