import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/buscador.css','resources/js/busqueda.js'],
            refresh: true,
        }),
    ],
});
