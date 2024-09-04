import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], //acá se importan los CSS y demás recursos de Laravel y Vite. Si trabajamos con REACT, VUE u otro SPA, los recursos y CSS deben importarse en Resources/js/app.js
            refresh: true,
        }),
    ],
});
