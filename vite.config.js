import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import AutoImport from 'unplugin-auto-import/vite'
import Components from 'unplugin-vue-components/vite'
import { ElementPlusResolver } from 'unplugin-vue-components/resolvers'


export default defineConfig({
    esbuild: {
        supported: {
            'top-level-await': true // без этого ошибка сборки
        },
    },
    plugins: [
        vue(),
        // разобраться со сборкой вуя , что и куда билдится
        AutoImport({
            resolvers: [ElementPlusResolver()],
        }),
        Components({
            resolvers: [ElementPlusResolver()],
        }),

        laravel({
            input: [
                'resources/js/app.js',
                'resources/scss/app.scss'
            ],
            refresh: true
        }),

    ],
    resolve: {
        alias: {

        }
    },
});


