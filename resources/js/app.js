import "./assets/main.css";
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import Layout from "./Shared/Layout.vue";

import store from './store';
const app = createApp();
const options = {
    // You can set your default options here
};

createInertiaApp({
    resolve: name =>{
        let page =require(`./Pages/${name}`).default;
        if(page.layout === undefined){
            page.layout ??= Layout ;
        }
        return page ;
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(store)
            .mount(el)
    },
})
