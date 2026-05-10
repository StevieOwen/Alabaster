# Stage 1: Build assets
FROM node:20-alpine as asset-builder
WORKDIR /app
COPY . .
# We use npm install if you don't have a package-lock.json, otherwise npm ci is better
RUN npm install && npm run build

# Stage 2: PHP Server
# We use the 'apache' version because it includes the web server and PHP in one package
FROM php:8.4-apache
WORKDIR /var/www/html

# 1. Install system dependencies for PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql gd zip

# 2. Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# 3. Update Apache config to point to Laravel's /public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 4. Copy code and compiled assets
COPY --from=asset-builder /app .
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# 6. Set correct permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 7. Expose port (Render uses $PORT environment variable)
EXPOSE 80
RUN php artisan config:clear
# 8. Start script: Run migrations, link storage, and start Apache
CMD php artisan migrate --force && \
    php artisan storage:link && \
    apache2-foreground