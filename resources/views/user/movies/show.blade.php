@extends('layouts.app')
@section('content')
  <h2 class="header">{{$movie->title}}</h2>

  <!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img1.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img3.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>




    <p class="mybody">{{$movie->director}}</p>
      <p class="mybody">{{$movie->company}}</p>
        <p class="mybody">{{$movie->runtime}}</p>
          <p class="mybody">{{$movie->boxoffice}}</p>
            <p class="mybody">{{$movie->body}}</p>



           <div class="row">
             <div class="col-12">

              <div class="header">
                Reviews
              </div>
               <div class="mybody">


                             @if (count($reviews) == 0 )
                               <p>there are no reviews for this Movie!</p>

                               @else
                               <table class="table">

                                 <thead class="mybody">
                                   <th>Title</th>
                                   <th>Body</th>
                                     <th>Created by:</th>
                                 </thead>
                                <tbody class="mybody">
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

@endsection
