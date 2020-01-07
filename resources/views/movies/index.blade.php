@extends('layouts.app')
<script>
https://api.themoviedb.org/3/movie/111?api_key=8c988e866c6227c3a7cc9b31868699bb&language=en-US
var api_key = '8c988e866c6227c3a7cc9b31868699bb';
var baseUrl = 'https://api.themoviedb.org/3/';

fetch(baseUrl+'movie/111?api_key='+api_key+'&language=en+US')
.then(response => response.json())
.then(function(data){
  console.log("all data");
  console.log(data);
});
</script>

@section('content')
    <h2 class="text-left">All Movies</h2>

    <div class="row">


      @forelse($movies as $movie)
<div class="col-6">
  <li class="list-group-item my-2">
    <h4 class="float-left">{{ $movie->title }}</h5>
     <p class="float-right">Created by: {{ $movie->user->name }}</p> {{-- from the user relationship --}}
    <div class="clearfix"></div>
    <p>{{ Str::limit($movie->body,20) }}</p>
    <small class="float-right">{{ $movie->created_at->diffForHumans() }}</small>
    <a href="{{ route('movies.show',$movie->id) }}">Read More</a>
  </li>

</div>



@empty
   <h4 class="text-center">No Movies Found!</h4>
@endforelse
    </ul>
    <div class="d-flex justify-content-center">

</div>
    </div>


@endsection
