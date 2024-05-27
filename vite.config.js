import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/style.css',
                'resources/css/vendor.css',
                'resources/css/bootstrap.min.css',
                'resources/js/app.js',
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/bootstrap.js',
                'resources/js/jquery-1.11.0.min.js',
                'resources/js/script.js'
                ],
            refresh: true,
        }),
    ],
});
