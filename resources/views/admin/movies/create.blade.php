@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

        <div class="header">
          Add new Movie
        </div>
        <div class="mybody">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('admin.movies.store')}}" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">


          <div class="form-group">
            <label for ="title">Title </label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}"/>
          </div>

          <div class="form-group">
            <label for ="director">Director </label>
            <input type="text" class="form-control" id="director" name="director" value="{{old('director')}}"/>
          </div>

          <div class="form-group">
            <label for ="company">Company </label>
            <input type="text" class="form-control" id="company" name="company" value="{{old('company')}}"/>
          </div>

          <div class="form-group">
            <label for ="boxoffice">Box-Office </label>
            <input type="text" class="form-control" id="boxoffice" name="boxoffice" value="{{old('boxoffice')}}"/>
          </div>

          <div class="form-group">
            <label for ="runtime">Runtime </label>
            <input type="text" class="form-control" id="runtime" name="runtime" value="{{old('runtime')}}"/>
          </div>

          <div class="form-group"body
            <label for ="body">Description </label>
            <input type="text" class="form-control" id="body" name="body" value="{{old('body')}}"/>
          </div>


          <a href="{{route ('admin.movies.index')}}" class="btn btn-link">Cancel</a>
          <button type="submit" class="btn btn-primary float-right">Submit</button>


        </form>
      </div>



  </div>

</div>
</div>

@endsection
