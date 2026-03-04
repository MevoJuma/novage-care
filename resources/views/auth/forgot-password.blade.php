@extends('layouts.landing')

@section('title', __('Forgot Password') . ' - Novage Care')

@section('content')
<div class="auth-page">
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="auth-card">
                        <p class="text-secondary mb-4">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </p>

                        @if (session('status'))
                            <div class="alert alert-success mb-4" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="font-weight-bold text-dark">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-main-2 btn-round-full">
                                {{ __('Email Password Reset Link') }} <i class="icofont-simple-right ml-2"></i>
                            </button>
                        </form>

                        <p class="text-center text-muted mt-4 mb-0">
                            <a href="{{ route('login') }}" class="text-color">{{ __('Back to sign in') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
