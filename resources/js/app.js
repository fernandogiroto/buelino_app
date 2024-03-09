import '@/Assets/Css/app.css';
import '@/Assets/Css/vendor.css';
import "bootstrap/dist/js/bootstrap.js";
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import 'vue3-toastify/dist/index.css';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';



const appName = import.meta.env.VITE_APP_NAME || 'Buelino';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);

        return app;
    },
    progress: {
        color: '#4B5563',
    },
});
