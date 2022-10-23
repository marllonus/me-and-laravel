import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss', 
                'resources/js/app.js',
                //'node_modules/font-awesome/scss/font-awesome.scss'
            ],
            refresh: true,
        }),
    ],
});
