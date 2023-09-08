import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import { fileURLToPath, URL } from 'node:url';
// https://vitejs.dev/config/
export default defineConfig({
  build: {
    rollupOptions: {
      input: './src/app.js',
    },
    outDir: "./build",
    cssMinify: true,
    emptyOutDir: true
  },
  plugins: [vue(),],
  resolve: {
    alias: {
      vue: 'vue/dist/vue.esm-bundler.js',
      '@': fileURLToPath(new URL('./src/', import.meta.url)),
    },
  },
})
