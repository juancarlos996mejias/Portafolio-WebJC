import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    // Fuerza a Vite a generar URLs absolutas con HTTPS EN PRODUCCIÓN
    base: process.env.VITE_BASE_URL || '/',

    build: {
        manifest: true,
        outDir: 'public/build',
        assetsDir: 'assets',
    },

    server: {
        https: false, // local
        host: true,
    },
});

