import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/guest/app.css',
                'resources/js/guest/app.js',
            ],
            refresh: true,
        }),
    ],
});
