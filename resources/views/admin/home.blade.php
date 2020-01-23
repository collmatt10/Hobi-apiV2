@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row flow-left">
        <div class="col-md-8">

            <div class="header"> DASHBOARD </div>

                <div class="body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


              <div class="mybody">
                    You are logged in as an admin!
                  </br>
                  Please select what media you would like to manage
                </br>
                <div class="dashlinks">
                <a href="{{route('admin.movies.index')}}">Movies Manager</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
