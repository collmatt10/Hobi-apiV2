@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm authentication') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your authentication before continuing.') }}

                    <form method="POST" action="{{ route('authentication.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="authentication" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="authentication" type="authentication" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('authentication')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm authentication') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
