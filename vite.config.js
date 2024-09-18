import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Main app:
                'resources/css/app.css', 
                'resources/scss/app.scss', 
                'resources/js/app.js',
                
                // All Projects:
                'resources/css/worksPagesCSS/app.css',
                // Project - Natours:
                'resources/scss/worksPagesSCSS/natours/app.scss', 
                // Project - Trillo:
                'resources/scss/worksPagesSCSS/trillo/app.scss', 
                // Project - Nexter:
                'resources/scss/worksPagesSCSS/nexter/app.scss', 
                // Project - v-project:
                'resources/scss/worksPagesSCSS/v-project/app.scss',
                'resources/js/works/v-project/main.js',
                // Project - mapty:
                'resources/scss/worksPagesSCSS/mapty/app.scss',
                'resources/js/works/mapty/main.js',
            ],
            refresh: true,
        }),
    ],
});
