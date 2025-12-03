# 1. Imagen PHP con Composer
FROM php:8.2-fpm

# 2. Dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev nodejs npm && \
    docker-php-ext-install pdo pdo_mysql

# 3. Directorio de la app
WORKDIR /var/www/html

# 4. Copiar archivos
COPY . .

# 5. Instalar composer y dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# 6. Instalar Node y construir assets
RUN npm install
RUN npm run build

# 7. Exponer puerto
EXPOSE 8000

# 8. Comando para iniciar Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
