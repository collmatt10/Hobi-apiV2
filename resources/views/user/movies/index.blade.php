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

      <div class="container-fluid">
        <h1 class="text-center mb-3 header">Bootstrap Multi-Card Carousel</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item col-md-4 active">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 1</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 2</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 3</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 4</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 5</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 6</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 7</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>



    </div>


@endsection
