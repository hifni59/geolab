import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // Daftarkan SEMUA file sumber utama di sini
            input: [
                'resources/sass/app.scss',      // Menunjuk ke file SASS Anda
                'resources/js/app.js',          // Untuk layout admin & Breeze (Alpine.js)
                'resources/js/frontend.js',     // Untuk layout frontend Anda
            ],
            refresh: true,
        }),
    ],
});