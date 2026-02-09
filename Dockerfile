FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    nginx git unzip libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Instala dependencias
RUN composer install --no-dev --optimize-autoloader

# Nginx conf
RUN rm /etc/nginx/sites-enabled/default
COPY docker/nginx.conf /etc/nginx/conf.d/default.conf

# Permisos Laravel
RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

# Limpia caches por si venían de local
RUN php artisan config:clear || true \
 && php artisan route:clear || true \
 && php artisan view:clear || true

EXPOSE 8080

CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
