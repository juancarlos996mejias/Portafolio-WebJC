# Imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias de Laravel
RUN apt-get update && apt-get install -y \
    git unzip curl libonig-dev libzip-dev zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar archivos al contenedor
COPY . /var/www/html

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Instalar dependencias de Node (Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install \
    && npm run build

# Dar permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Puerto de Apache
EXPOSE 80
