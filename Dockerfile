# Stage 1: Build assets
FROM node:18 as asset-builder
WORKDIR /app
COPY . .
RUN npm install && npm run build

# Stage 2: PHP Server
FROM php:8.2-fpm-alpine
WORKDIR /var/www/html

# Install system dependencies
RUN apk add --no-cache nginx postgresql-dev libpng-dev libzip-dev zip

# Install PHP extensions for PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql gd zip

# Copy code and compiled assets
COPY --from=asset-builder /app .
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Expose port and start
EXPOSE 80
CMD php artisan migrate --force && php artisan storage:link && php artisan serve --host=0.0.0.0 --port=$PORT