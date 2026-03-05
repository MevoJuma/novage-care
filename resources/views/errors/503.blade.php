@extends('layouts.landing')

@section('title', 'Service Unavailable - Novage Care')

@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Error 503</span>
                        <h1 class="text-capitalize mb-5 text-lg text-white">Service unavailable</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <p class="mb-4">We're temporarily down for maintenance. Please try again shortly.</p>
                    <a href="{{ url('/') }}" class="btn btn-main btn-round-full">Back to home</a>
                </div>
            </div>
        </div>
    </section>
@endsection
