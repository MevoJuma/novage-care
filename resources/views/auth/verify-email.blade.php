@extends('layouts.landing')

@section('title', __('Verify Email') . ' - Novage Care')

@section('content')
<div class="auth-page">
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="auth-card">
                        <p class="text-secondary mb-4">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </p>

                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success mb-4" role="alert">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <form method="POST" action="{{ route('verification.send') }}" class="mb-0 mr-2">
                                @csrf
                                <button type="submit" class="btn btn-main-2 btn-round-full">
                                    {{ __('Resend Verification Email') }} <i class="icofont-simple-right ml-2"></i>
                                </button>
                            </form>

                            <form method="POST" action="{{ route('logout') }}" class="mb-0">
                                @csrf
                                <button type="submit" class="btn btn-solid-border btn-round-full">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
