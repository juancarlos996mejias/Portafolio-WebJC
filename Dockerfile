# ============================
# 1) Build de assets con Node
# ============================
FROM node:20 AS build

WORKDIR /app

# Copiar package.json e instalar dependencias JS
COPY package*.json ./
RUN npm install

# Copiar todo el proyecto
COPY . .

# Compilar Vite (generará public/build/)
RUN npm run build


# ============================
# 2) Imagen PHP + Apache
# ============================
FROM php:8.2-apache

# Instalar extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    zip unzip git curl libonig-dev libzip-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd

# Habilitar Apache mod_rewrite
RUN a2enmod rewrite

# Copiar archivos del proyecto
COPY . /var/www/html

# ============================
# INSTALAR COMPOSER
# ============================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar dependencias Laravel
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Copiar build generado por Vite
COPY --from=build /app/public/build /var/www/html/public/build

# (IMPORTANTE) — Vite NO genera public/js ni public/css:
# así que NO copiamos esas carpetas. No existen.
# Si quitamos estas líneas, desaparece el error.
# COPY --from=build /app/public/css /var/www/html/public/css
# COPY --from=build /app/public/js /var/www/html/public/js

# Configurar Apache para servir desde /public
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Permisos correctos
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Puerto de Apache
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
