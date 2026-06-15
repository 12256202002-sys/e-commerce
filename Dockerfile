FROM php:8.1-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    mysql-client

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN php artisan key:generate --force

EXPOSE 8000

CMD ["sh", "-c", "php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000"]
