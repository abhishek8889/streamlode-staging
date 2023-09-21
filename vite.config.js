import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
             	'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/adminapp.js',
                'resources/js/guestapp.js',
                'resources/js/pingStatus.js',
         	],
            refresh: true,
        }),
    ],
});
