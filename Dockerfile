# Stage 1: Build assets
FROM node:20-alpine as asset-builder
WORKDIR /app
COPY . .
# Generates the 'public/build' folder containing your CSS/JS [cite: 1, 16, 110]
RUN npm install && npm run build

# Stage 2: PHP Server
FROM php:8.4-apache
WORKDIR /var/www/html

# 1. Install system dependencies for PostgreSQL and Intl [cite: 2, 5, 14]
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql gd zip intl

# 2. Enable Apache mod_rewrite for Laravel routing [cite: 11, 49, 101]
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 3. Update Apache config to point to Laravel's /public folder [cite: 1, 9, 31, 48]
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 4. Copy ALL code (including composer.json) and compiled assets [cite: 1, 13, 50, 110]
COPY --from=asset-builder /app .
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Install PHP dependencies without booting the app [cite: 13, 94, 105, 110]
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 6. Set correct permissions for Laravel [cite: 2, 38, 83]
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 7. Expose port (Render uses $PORT environment variable)
EXPOSE 80

# 8. Start script: Clear config, run migrations, and start Apache [cite: 11, 49, 94, 101]
CMD php artisan config:clear && \
    chmod -R 775 storage bootstrap/cache && \
    chown -R www-data:www-data storage bootstrap/cache && \
    php artisan migrate --force && \
    php artisan storage:link && \
    apache2-foreground