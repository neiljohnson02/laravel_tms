# Use the official PHP 8.2 image with FPM
FROM php:8.2-fpm

# Set working directory inside the container
WORKDIR /var/www

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy the Laravel project into the container
COPY . .

# Install PHP dependencies via Composer
RUN composer install --no-dev --optimize-autoloader

# Set folder permissions for Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

# Expose the port Laravel will run on
EXPOSE 8000

# Run Laravel setup commands and start the app
CMD php artisan key:generate && \
    php artisan migrate --force && \
    php artisan serve --host=0.0.0.0 --port=8000
