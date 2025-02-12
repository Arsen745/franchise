import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/components/about.css',
                'resources/css/components/corporate.css',
                'resources/css/components/economy.css',
                'resources/css/components/footer.css',
                'resources/css/components/format.css',
                'resources/css/components/header.css',
                'resources/css/components/marketing.css',
                'resources/css/components/nav.css',
                'resources/css/components/partnership.css',
                'resources/css/components/reasons.css',
                'resources/css/components/success.css',
                'resources/js/app.js',
                'resources/js/modal.js',
                'resources/js/components/about.js',
                'resources/js/components/corporate.js',
                'resources/js/components/format.js',
                'resources/js/components/partnership.js',
                'resources/js/components/reasons.js',
                'resources/js/components/success.js',
                'resources/js/components/economy.js',
            ],
            refresh: true,
        }),
    ],
});
