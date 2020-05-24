/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import DashboardIndex from './components/dashboard/DashboardIndex.vue';
import DashboardCreate from './components/dashboard/DashboardCreate.vue';
import DashboardEdit from './components/dashboard/DashboardEdit.vue';

import NewsIndex from './components/admin/news/NewsIndex.vue';
import NewsCreate from './components/admin/news/NewsCreate.vue';
import NewsEdit from './components/admin/news/NewsEdit.vue';

import CommentIndex from './components/client/comments/CommentIndex.vue';
import CommentCreate from './components/client/comments/CommentCreate.vue';
import CommentEdit from './components/client/comments/CommentEdit.vue';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const routes = [
    {
        path: '/',
        components: {
            dashboardIndex: DashboardIndex,
            newsIndex: NewsIndex,
            indexComment: CommentIndex
        }
    },
    {path: '/admin/dashboard/create', component: DashboardCreate, name: 'createDashboard'},
    {path: '/admin/dashboard/edit/:id', component: DashboardEdit, name: 'editDashboard'},

    {path: '/admin/news/create', component: NewsCreate, name: 'createNews'},
    {path: '/admin/news/edit/:id', component: NewsEdit, name: 'editNews'},

    {path: '/comments/comment/create', component: CommentCreate, name: 'createComment'},
    {path: '/comments/comment/edit/:id', component: CommentEdit, name: 'editComment'},
]

const router = new VueRouter({
    //hashbang: false,
    //mode: 'history', // https://router.vuejs.org/guide/essentials/history-mode.html для того, чтобы убрать слеш в конце
    routes
})

const app = new Vue({router}).$mount('#app')
