import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/user/app.css',
                'resources/js/user/app.js',
            ],
            refresh: true,
        }),
    ],
});
