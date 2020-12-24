@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 mt-3 px-3">
            <a href="/home" class="mb-3 d-inline-block"><i class="fas fa-long-arrow-alt-left mr-2"></i>Home</a>
            <h4 class="card-name-date font-weight-bold text-center my-5">Login to Yowndrift</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div class="form-group d-flex justify-content-center align-items-center">
    
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail address">
    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="form-group d-flex justify-content-center align-items-center">
    
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}">
    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="form-group d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-dark-green btn-block">
                            {{ __('Login') }}
                        </button>
    
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection