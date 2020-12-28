@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-10 mt-3 px-3">
            <div class="d-flex flex-row justify-content-between">
                <a href="/home" class="mb-3 d-inline-block"><i class="fas fa-long-arrow-alt-left mr-2"></i>Home</a>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                    </div>
                </div>
            <h6 class="card-name-date text-center mt-5">Join Yowndrift</h6>
            <h2 class="font-weight-bold text-center mb-5">Create your account</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group d-flex justify-content-center align-items-center">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Username') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center align-items-center">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email address') }}">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}">
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center align-items-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-blue btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
