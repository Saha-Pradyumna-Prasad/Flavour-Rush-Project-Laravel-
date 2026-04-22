# PHP 8.4 বেস ইমেজ ব্যবহার করছি
FROM php:8.4-fpm

# সিস্টেমের প্রয়োজনীয় প্যাকেজ ইনস্টল
RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git

# PHP এক্সটেনশন ইনস্টল (Laravel এর জন্য দরকারি)
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer ইনস্টল
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# কাজের ডিরেক্টরি সেট
WORKDIR /var/www/html

# পুরো প্রজেক্ট কপি করুন
COPY . .

# স্টোরেজ এবং ক্যাশের পারমিশন ঠিক করুন
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Nginx কনফিগারেশন ফাইল কপি করুন
COPY nginx.conf /etc/nginx/sites-available/default

# পোর্ট 80 খুলুন
EXPOSE 80

# কন্টেইনার শুরুর কমান্ড
CMD ["sh", "-c", "composer install --no-interaction && php artisan key:generate && php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan migrate --force && service nginx start && php-fpm"]