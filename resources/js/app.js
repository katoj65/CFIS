require('./bootstrap');

// Import modules...
import Vue from 'vue';

import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue';
// import store from './store/store';
import PortalVue from 'portal-vue';
import axios from 'axios';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import { InertiaProgress } from '@inertiajs/progress';

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';




InertiaProgress.init({
    // The delay after which the progress bar will
    // appear during navigation, in milliseconds.
    delay: 20,
    // The color of the progress bar.
    color: '#ba4a00',
    // color:'#F7DC6F',
    // Whether to include the default NProgress styles.
    //includeCSS: true,
    // Whether the NProgress spinner will be shown.
    //showSpinner: false,
  });




import { Inertia } from '@inertiajs/inertia';
// Scroll to the top after each navigation
Inertia.on('finish', () => {
    window.scrollTo({ top: 0});
});










Vue.use(ElementUI);
Vue.mixin({ methods: { route } });
Vue.use(InertiaPlugin);
Vue.use(PortalVue);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);



const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),

}).$mount(app);

