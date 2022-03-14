FROM php:8.1

RUN apt-get update -y && apt-get install -y openssl zip unzip git

#Install zip
RUN apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql pcntl

RUN pecl install xdebug && docker-php-ext-enable xdebug

WORKDIR /app
COPY . /app
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
