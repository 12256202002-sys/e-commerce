FROM php:8.2-cli

WORKDIR /app

# Install system dependencies & Node.js
RUN apt-get update && apt-get install -y \
    git curl zip unzip default-mysql-client \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy ALL project files first
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Install Node dependencies & build
RUN npm install
RUN npm run build

# Setup Laravel
RUN cp .env.example .env 2>/dev/null || echo "APP_KEY=" > .env
RUN php artisan key:generate --force
RUN php artisan config:cache

EXPOSE 8080
