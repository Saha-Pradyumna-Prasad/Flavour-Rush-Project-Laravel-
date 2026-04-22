# PHP 8.4 ব্যবহার করুন (8.2 এর জায়গায়)
FROM php:8.4-fpm

# সিস্টেম প্যাকেজ ইনস্টল
RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    nano

# PHP এক্সটেনশন ইনস্টল
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer ইনস্টল
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# কাজের ডিরেক্টরি
WORKDIR /var/www/html

# পুরো প্রজেক্ট কপি
COPY . .

# স্টোরেজ পারমিশন
RUN mkdir -p storage/framework/cache
RUN mkdir -p storage/framework/sessions
RUN mkdir -p storage/framework/views
RUN mkdir -p bootstrap/cache

RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# .env ফাইল তৈরি
RUN cp .env.example .env 2>/dev/null || echo "APP_ENV=production" > .env

# Nginx কনফিগ
COPY nginx.conf /etc/nginx/sites-available/default

# পোর্ট ওপেন
EXPOSE 80

# স্টার্ট স্ক্রিপ্ট
CMD ["sh", "-c", "composer install --no-interaction --no-progress && php artisan key:generate && php artisan config:cache && php artisan route:cache && php artisan view:cache && service nginx start && php-fpm -F"]
