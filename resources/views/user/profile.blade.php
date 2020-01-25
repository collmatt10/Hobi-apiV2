@extends('layouts.app')
@section('content')
    <h3 class="text-left header">Edit Profile</h3>
    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data"> {{-- <- enctype for file upload --}}
        @csrf
        @method('PUT')
        <div class="form-group mybody">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') ? : Auth::user()->name }}" placeholder="Enter Name">
            @if($errors->has('name'))
                <span class="invalid-feedback">
                    {{$errors->first('name')}}
                </span>
            @endif
        </div>
        <div class="form-group mybody">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('email') ? : Auth::user()->email }}" placeholder="Enter Email">
            @if($errors->has('email'))
                <span class="invalid-feedback">
                    {{$errors->first('email')}}
                </span>
            @endif
        </div>
        <div class="form-group mybody">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter Password">
            @if($errors->has('password'))
                <span class="invalid-feedback">
                    {{$errors->first('password')}}
                </span>
            @endif
        </div>
        <div class="custom-file ">
            <input type="file" name="image" class="custom-file-input {{$errors->has('image') ? 'is-invalid' : ''}}" id="image">
            <label class="custom-file-label" for="image">Profile Image</label>
            @if($errors->has('image'))
                <span class="invalid-feedback">
                    {{$errors->first('image')}}
                </span>
            @endif
        </div>
        <div class="row">
          <div class="col-6">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
          <button class="btn btn-danger mt-3 ml-3" href="{{ route('welcome') }}">Cancel</button>
         </div>
        </div>

  <h2 class="text-left header pt-5">Critic request</h2>
  <div class="mybody">If you are a critic and would like to register as one on this site please email us below</div>
        <div class="form-group row mb-0">
            <div class="col-md-8 pt-3">
              <button type="submit" class="btn btn-success">
                  {{ __('Request Registration') }}
              </button>
                @if (Route::has('critic.request'))
                    <a class="btn btn-link" href="{{ route('critic.request') }}">
                        {{ __('Want to become a critic?') }}
                    </a>
                @endif
            </div>
        </div>

    </form>
@endsection
