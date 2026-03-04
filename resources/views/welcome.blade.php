@extends('layouts.landing')

@section('content')
    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <h1 class="mb-3 mt-3">@lang('messages.tag_line')</h1>

                        <p class="mb-4 pr-5 text-white">@lang('messages.welcome_message')</p>
                        <div class="btn-container ">
                            <a href="{{ url('/about') }}"
                                class="btn btn-main-2 btn-icon btn-round-full">@lang('messages.learn_more')<i
                                    class="icofont-simple-right ml-2  ">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
    <!-- Merged Emergency & Appointment Card -->
    <div class="feature-item mb-5 mb-lg-0">
        <div class="feature-icon mb-4">
            <i class="icofont-ui-call"></i>
        </div>
        <span>@lang('messages.around_the_clock_support')</span>
        <h4 class="mb-3">@lang('messages.emergency_and_appointment')</h4>
        <p class="mb-2">@lang('messages.call_us_anytime')</p>
        <h5 class="text-success">+255-7153-03510</h5>
    </div>

    <!-- Working Hours -->
    <div class="feature-item mb-5 mb-lg-0">
        <div class="feature-icon mb-4">
            <i class="icofont-ui-clock"></i>
        </div>
        <span>@lang('messages.timing_schedule')</span>
        <h4 class="mb-3">@lang('messages.working_hours')</h4>
        <ul class="w-hours list-unstyled">
            <li class="d-flex justify-content-between">@lang('messages.monday_to_friday') : <span>8:00 - 17:00</span></li>
            <li class="d-flex justify-content-between">@lang('messages.saturday') : <span>9:00 - 17:00</span></li>
            <li class="d-flex justify-content-between">@lang('messages.sunday') : <span>10:00 - 17:00</span></li>
        </ul>
    </div>

    <!-- New Informational Card -->
    <div class="feature-item mb-5 mb-lg-0">
        <div class="feature-icon mb-4">
            <i class="icofont-leaf"></i>
        </div>
        <span>@lang('messages.wellness_insights')</span>
        <h4 class="mb-3">@lang('messages.healthy_aging_tips')</h4>
        <p>@lang('messages.latest_tips_for_elder_health')</p>
    </div>
</div>

                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="{{ asset('images/about/img-1.jpg') }}" alt="" class="img-fluid">
                        <img src="{{ asset('images/about/img-2.jpg') }}" alt="" class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset('images/about/img-3.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">@lang('messages.personalized_care')</h2>
                        <p class="mt-4 mb-5">@lang('messages.personalized_care_text')</p>

                        <a href="{{ url('/about') }}"
                            class="btn btn-main-2 btn-round-full btn-icon">@lang('messages.about_us')<i
                                class="icofont-simple-right ml-3">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">58</span>k
                            <p>@lang('messages.happy_people')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">700</span>+
                            <p>@lang('messages.elders_joined')</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">40</span>+
                            <p>@lang('messages.experts')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">20</span>
                            <p>@lang('messages.products')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section appoinment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="appoinment-content">
                        <img src="{{ asset('images/about/img-3.jpg') }}" alt="" class="img-fluid">
                        <div class="emergency">
                            <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+255715303510</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 ">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                        <h2 class="mb-2 title-color">@lang('messages.book_a_wellness_consultation')</h2>
                        <p class="mb-4">@lang('messages.booking_explanations')</p>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('appointments.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="service" value="{{ old('service') }}" class="form-control">
                                            <option selected disabled>@lang('messages.choose_service')</option>
                                            <option>@lang('messages.nutrition_coaching')</option>
                                            <option>@lang('messages.therapeutic_movement')</option>
                                            <option>@lang('messages.mindfulness_counseling')</option>
                                            <option>@lang('messages.virtual_consultation')</option>
                                            <option>@lang('messages.wellness_tier_guidance')</option>
                                            <option>@lang('messages.subscription_support')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="specialist" value="{{ old('specialist') }}"
                                            class="form-control">
                                            <option selected disabled>@lang('messages.select_specialist')</option>
                                            <option>@lang('messages.nutritionist')</option>
                                            <option>@lang('messages.therapist_counselor')</option>
                                            <option>@lang('messages.movement_coach')</option>
                                            <option>@lang('messages.geriatric_care_expert')</option>
                                            <option>@lang('messages.general_wellness_consultant')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="appointmentDate" name="date" value="{{ old('date') }}"
                                            type="date" class="form-control" placeholder="dd/mm/yyyy"
                                            min="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="time" value="{{ old('time') }}" type="time"
                                            class="form-control" placeholder="Time">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" value="{{ old('name') }}" type="text"
                                            class="form-control" placeholder="@lang('messages.full_name')">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="phone" value="{{ old('phone') }}" type="Number"
                                            class="form-control" placeholder="@lang('messages.phone_number')">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-2 mb-4">
                                <textarea name="message" value="{{ old('message') }}" class="form-control" rows="6"
                                    placeholder="@lang('messages.message')"></textarea>
                            </div>

                            <button type="submit" class="btn btn-main btn-round-full">@lang('messages.book_now')<i
                                    class="icofont-simple-right ml-2  "></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var el = document.getElementById('appointmentDate');
        if (el) {
            var today = new Date().toISOString().split('T')[0];
            el.setAttribute('min', today);
        }
    });
</script>
@endpush
