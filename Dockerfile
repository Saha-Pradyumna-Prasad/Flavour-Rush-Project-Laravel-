FROM php:8.4-fpm-alpine

# সিস্টেম প্যাকেজ ইনস্টল
RUN apk add --no-cache \
    nginx \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    libxpm-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    supervisor

# PHP এক্সটেনশন ইনস্টল
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    xml \
    curl \
    zip

# Composer ইনস্টল
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# কাজের ডিরেক্টরি
WORKDIR /var/www/html

# পুরো প্রজেক্ট কপি
COPY . .

# স্টোরেজ পারমিশন
RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache
RUN chmod -R 777 storage bootstrap/cache

# Nginx কনফিগ (নিচে দিচ্ছি)
COPY nginx.conf /etc/nginx/http.d/default.conf

# পোর্ট ওপেন
EXPOSE 80

# স্টার্ট স্ক্রিপ্ট
CMD ["sh", "-c", "composer install --no-interaction --no-progress && php artisan key:generate && php artisan config:cache && php artisan route:cache && php artisan view:cache && php-fpm && nginx -g 'daemon off;'"]
