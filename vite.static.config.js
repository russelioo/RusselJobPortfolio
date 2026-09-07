import { defineConfig } from 'vite';
import { fileURLToPath, URL } from 'node:url';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';

// Static build config for GitHub Pages deployment.
// This is separate from vite.config.js (which uses laravel-vite-plugin for local dev).
export default defineConfig({
    // Must match the GitHub Pages repo sub-path: https://russelioo.github.io/RusselJobPortfolio/
    base: '/RusselJobPortfolio/',

    plugins: [
        tailwindcss(),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],

    build: {
        outDir: 'docs',
        emptyOutDir: true,
    },

    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./resources/js', import.meta.url)),
        },
    },
});
