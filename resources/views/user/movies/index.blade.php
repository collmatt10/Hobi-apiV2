@extends('layouts.app')


@section('content')
<!-- Load Axios -->
    {--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}
    <!-- Load Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <div id="app">
        <div v-show="loaded" class="loader"></div>
        <ul>

       </ul>
    </div>

    <script>
    var app = new Vue({
        el: "#app",
        data: {
            items: [],
            baseUrl: 'https://api.themoviedb.org/3',
            apiKey: '8c988e866c6227c3a7cc9b31868699bb',
            imageUrl: 'https://image.tmdb.org/t/p/w342',
            loaded: true,
            myList: null
        },
        mounted: function() {
            // Create the method you made below
            fetch(this.baseUrl + '/discover/movie?api_key=' + this.apiKey + '&sort_by=popularity.desc').then(response => response.json()).then(function(data) {
              console.log(data);
              this.myList = data;
              this.loaded = false;
            });
        },
        methods: {
            // Fetch data from the API
        }
    });
    </script>


@endsection
