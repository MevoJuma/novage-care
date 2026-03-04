@extends('layouts.landing')

@section('title', __('Confirm Password') . ' - Novage Care')

@section('content')
<div class="auth-page">
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="auth-card">
                        <p class="text-secondary mb-4">
                            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                        </p>

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="form-group">
                                <label for="password" class="font-weight-bold text-dark">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="••••••••" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-main-2 btn-round-full">
                                {{ __('Confirm') }} <i class="icofont-simple-right ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
