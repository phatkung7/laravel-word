FROM php:8.1-apache

# ติดตั้ง system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    gnupg2 \
    unzip \
    zip \
    git \
    nano \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# ติดตั้ง Node.js 18.x และ npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && apt-get install -y nodejs

# ติดตั้ง Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# ติดตั้ง PHP Extensions ที่ Laravel ใช้
RUN docker-php-ext-install pdo pdo_mysql bcmath mbstring zip

# ติดตั้ง GD extension
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

# เปิดใช้งาน Apache rewrite module
RUN a2enmod rewrite

# ตั้งค่า Apache ให้รองรับ Laravel public/
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf && \
    sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# กำหนด working directory
WORKDIR /var/www/html

# คัดลอกไฟล์ทั้งหมดก่อนเพื่อให้ artisan มีอยู่
COPY . .

# ตั้งค่า permissions
RUN chown -R www-data:www-data /var/www/html /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache


# เปิด Apache
CMD ["apache2-foreground"]
