require('./bootstrap');
require('./common');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import routes from './routes';
import store from './store/store';

window.Vue.use(VueRouter);

const router = new VueRouter({
    hashbang: false,
    mode: 'history',
    routes
})

const app = new Vue({
    router,
    store
}).$mount('#app')
