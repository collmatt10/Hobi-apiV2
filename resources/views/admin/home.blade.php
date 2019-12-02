@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an admin!
                  </br>
                  Please select what media you would like to manage
                </br>
                <a href="{{route('admin.movies.index')}}">Movies Manager</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
