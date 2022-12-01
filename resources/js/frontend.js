import '../css/frontend/main.css';

import '../js/Frontend/js/bootstrap.bundle.min.js'
import '../js/Frontend/js/countdown.js'
import '../js/Frontend/js/google-map.js'
import '../js/Frontend/js/html5shiv.js'
import '../js/Frontend/js/meanmenu.js'
import '../js/Frontend/js/html5shiv-printshiv.js'
import '../js/Frontend/js/isotope.pkgd.min.js'
import '../js/Frontend/js/isotope_custom.js'
import '../js/Frontend/js/jquery-3.6.0.min.js'
import '../js/Frontend/js/jquery-migrate-3.3.2.min.js'
import '../js/Frontend/js/jquery.gridrotator.js'
import '../js/Frontend/js/jquery.magnific-popup.min.js'
import '../js/Frontend/js/jquery.waypoints.min.js'
import '../js/Frontend/js/masonry.pkgd.min.js'
import '../js/Frontend/js/modernizr-3.11.2.min.js'
import '../js/Frontend/js/owl.carousel.min.js'
import '../js/Frontend/js/popper.js'
import '../js/Frontend/js/scrollreveal.min.js'
import '../js/Frontend/js/theme.js'

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Frontend/Pages/${name}.vue`, import.meta.glob('./Frontend/Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
