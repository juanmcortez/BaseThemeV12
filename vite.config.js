import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/base_theme.css', 'resources/js/base_theme.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
