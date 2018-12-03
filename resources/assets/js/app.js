
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
let routes = [
    { path: '', component: require('./components/HomeComponent.vue') },
    { path: '/exp', component: require('./components/ExampleComponent.vue') },
    { path: '/admin', component: require('./components/admins/HomeComponent.vue') }
];
const router = new VueRouter({
    routes,
    mode: 'history'
});
var app = new Vue({
    el: '#app',
    router
});
