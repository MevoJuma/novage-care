@extends('layouts.landing')

@section('title', __('Reset Password') . ' - Novage Care')

@section('content')
<div class="auth-page">
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="auth-card">
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <label for="email" class="font-weight-bold text-dark">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $request->email) }}" placeholder="{{ __('Email') }}" required autofocus autocomplete="username">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="font-weight-bold text-dark">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="••••••••" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation" class="font-weight-bold text-dark">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="••••••••" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-main-2 btn-round-full">
                                {{ __('Reset Password') }} <i class="icofont-simple-right ml-2"></i>
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
