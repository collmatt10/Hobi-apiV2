
require('./bootstrap');
import Vue from 'vue'
import App from './App.vue'
window.Vue = require('vue');

new Vue({
    render: h => h(App)
}). $mount('#app')
