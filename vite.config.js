import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'],
            refresh: true,
        }),
    ],
    build: {
        postcss: {
            plugins: [
                tailwindcss('./tailwind.config.js')
            ]
        }
    }
});
