# Use the official PHP 8.2 image
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring bcmath

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel project files
COPY . .

# Ensure .env exists
COPY .env.example .env

# Fix permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Install Composer dependencies
RUN composer install --no-interaction --prefer-dist --no-dev --optimize-autoloader

# Expose Laravel port
EXPOSE 8000

# Laravel app boot
CMD php artisan key:generate && \
    php artisan migrate --force && \
    php artisan serve --host=0.0.0.0 --port=8000
