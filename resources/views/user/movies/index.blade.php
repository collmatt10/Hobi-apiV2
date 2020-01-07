@extends('layouts.app')
<!-- Load Axios -->
    {--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}
    <!-- Load Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>
var app = new Vue({
    el: "#app",
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
});
</script>

@section('content')
<div id="app">
    <div v-show="loaded" class="loader"></div>
    <ul>
        <li v-for="data in items.results">
            <img :src="imageUrl + data.poster_path" alt="">
            <section>
                <h3>{{ data.original_title }}</h3>
                <p>{{ data.overview }}</p>
            </section>
        </li><!--
    --></ul>
</div>
@endsection
