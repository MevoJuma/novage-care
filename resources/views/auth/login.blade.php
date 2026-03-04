@extends('layouts.landing')

@section('title', __('Sign In') . ' - Novage Care')

@section('content')
<div class="auth-page">


    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="auth-card">
                        @if (session('status'))
                            <div class="alert alert-success mb-4" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="font-weight-bold text-dark">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required autofocus autocomplete="username">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="font-weight-bold text-dark">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="••••••••" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group d-flex justify-content-between align-items-center flex-wrap">
                                <label class="d-flex align-items-center text-secondary mb-0">
                                    <input type="checkbox" id="remember" name="remember" class="mr-2">
                                    <span>{{ __('Remember me') }}</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="text-color" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-main-2 btn-round-full">
                                {{ __('Sign in') }} <i class="icofont-simple-right ml-2"></i>
                            </button>
                        </form>

                        <p class="text-center text-muted mt-4 mb-0">
                            {{ __("Don't have an account?") }} <a href="{{ route('register') }}">{{ __('Register here') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
