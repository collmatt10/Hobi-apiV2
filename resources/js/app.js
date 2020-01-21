/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/* const app = new Vue({
    el: '#app',
    data: {
        items: ['original_title', 'overview'],
        baseUrl: 'https://api.themoviedb.org/3',
        apiKey: '8c988e866c6227c3a7cc9b31868699bb',
        imageUrl: 'https://image.tmdb.org/t/p/w342',
        loaded: true
    },
    created: function() {
        // Create the method you made below
        this.fetchData();
    },
    methods: {
        // Fetch data from the API
        fetchData: function() {
            this.$http.get(this.baseUrl + '/discover/movie?api_key=' + this.apiKey + '&sort_by=popularity.desc').then(response => {
                this.items = response.body;
                this.loaded = false;
            });
        }
    }
}); */
