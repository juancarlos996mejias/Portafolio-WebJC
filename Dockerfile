# Etapa 1: Build de assets con Node + Vite
FROM node:20 AS build

WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Etapa 2: PHP + Apache para servir Laravel
FROM php:8.2-apache

# Instalación de dependencias PHP necesarias
RUN apt-get update && apt-get install -y \
    zip unzip git curl libonig-dev libzip-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd

# Habilitar mod_rewrite para rutas amigables de Laravel
RUN a2enmod rewrite

# Copiar el código del proyecto
COPY . /var/www/html

# Copiar assets compilados desde la build
COPY --from=build /app/public/build /var/www/html/public/build
COPY --from=build /app/public/css /var/www/html/public/css
COPY --from=build /app/public/js /var/www/html/public/js
# (si tu build genera otras carpetas, copiarlas también)

# Cambiar DocumentRoot para que Apache sirva desde public/
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Permisos correctos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public

# Exponer puerto 80
EXPOSE 80

# Comando por defecto (Apache en foreground)
CMD ["apache2-foreground"]
