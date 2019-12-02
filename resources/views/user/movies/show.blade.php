@extends('layouts.app')
@section('content')
  <h2 class="text-left">{{$movie->title}}</h2>
    <p>{{$movie->director}}</p>
      <p>{{$movie->company}}</p>
        <p>{{$movie->runtime}}</p>
          <p>{{$movie->boxoffice}}</p>
            <p>{{$movie->body}}</p>



           <div class="row">
             <div class="col-12">
            <div class="card">
              <div class="card-header">
                Reviews
              </div>
               <div class="card-body">
                  <h2>Latest Reviews </h2>

                             @if (count($reviews) == 0 )
                               <p>there are no reviews for this Movie!</p>

                               @else
                               <table class="table">
                                 <thead>
                                   <th>Title</th>
                                   <th>Body</th>
                                     <th>Created by:</th>
                                 </thead>
                                <tbody>
                                  @foreach ($reviews as $review)

                                  <tr>
                                     <th>{{ $review->title}}</th>
                                       <th>{{ $review->body}}</th>
                                        {{-- <th>{{ $review->user->name}}</th>--}}
                                       <th>
                                             </form>
                                           </th>
                                         </tr>
                                         @endforeach

                                       </tbody>
                                     </table>
                                     @endif

                      <a href="{{route('critic.reviews.create', $movie->id)}}" class="btn btn-primary">Add Review</a>

              </div>

          </div>
        </div>
</div>

@endsection
