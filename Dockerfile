# 1️⃣ Imagen base PHP con FPM
FROM php:8.2-fpm

# 2️⃣ Instalar dependencias del sistema necesarias
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

# 4️⃣ Copiar archivos del proyecto
COPY . .

# 5️⃣ Instalar Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 6️⃣ Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# 7️⃣ Instalar Node y construir assets con Vite
RUN npm install
RUN npm run build

# 8️⃣ Ajustar permisos (opcional, pero recomendado)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/public

# 9️⃣ Exponer el puerto que Render asignará
EXPOSE 8000

# 🔟 Comando para iniciar Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT
