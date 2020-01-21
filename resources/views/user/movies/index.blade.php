@extends('layouts.app')


@section('content')
<!-- Load Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- Load Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

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
            
            fetch(this.baseUrl + '/discover/movie?api_key=' + this.apiKey + '&sort_by=popularity.desc').then(response => response.json()).then(function(data) {
              console.log(data);
              this.myList = data;
              this.loaded = false;
            })
        },
        methods: {
          getMovies(){
            let token = localStorage.getItem('token');
            axios.get('/api/movies', {
              headers: { Authorization: "Bearer " + token}
            })
            .then(function(response){
              console.log(response);
             app.movies = response.data.data;
           })
            .catch(function(error){
              console.log(error);
            })
          }
        },
})
    </script>
    <div id="app">
    <div v-show="loaded" class="loader"></div>
    <div  v-for="item in items.results" class="col-6">
      <li class="list-group-item my-2">
        <b-card-text>
         Data goes in here

        </b-card-text>

        <b-button href="#" variant="primary"></b-button>
        </b-card>
        </div>
      </li>

    </div>


@endsection
