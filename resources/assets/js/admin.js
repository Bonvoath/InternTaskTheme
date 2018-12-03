require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue'));
let routes = [
    { path: '', component: require('./components/HomeComponent.vue') },
    { path: '/exp', component: require('./components/ExampleComponent.vue') }
];
const router = new VueRouter({
    routes,
    mode: 'history'
});
var app = new Vue({
    el: '#app',
    router
});