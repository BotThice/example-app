import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',  // Listen on all interfaces (for Docker compatibility)
        hmr: {
            host: 'localhost',  // You may need to adjust this based on how you're accessing the app (could be your actual host URL)
        },
    },
});
