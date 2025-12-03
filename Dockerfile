# 1️⃣ Imagen base PHP con FPM
FROM php:8.2-fpm

# 2️⃣ Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# 3️⃣ Establecer directorio de trabajo
WORKDIR /var/www/html

# 4️⃣ Copiar todos los archivos del proyecto
COPY . .

# 5️⃣ Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# 6️⃣ Instalar Node y construir assets Vite
RUN npm install
RUN npm run build

# 7️⃣ Copiar imágenes de public explícitamente (para asegurarnos que existan en producción)
RUN mkdir -p public/images
COPY public/images public/images

# 8️⃣ Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# 9️⃣ Exponer puerto
EXPOSE 8000

# 🔟 Comando para iniciar Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT
