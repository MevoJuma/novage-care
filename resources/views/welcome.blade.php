<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="Novage Care">

    <title>Novage Care</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo0.png') }}" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('plugins/icofont/icofont.min.css') }}">

    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">


    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body id="top">

    <!-- Language Switcher (Visible on Large Screens, Right of Login Button) -->


    <script>
        // Function to get the current language from the URL
        function getLanguageFromUrl() {
            if (window.location.href.includes('/locale/sw')) {
                return 'sw';
            } else if (window.location.href.includes('/locale/en')) {
                return 'en';
            }
            return 'en'; // Default to English
        }

        function setLanguageFlag() {
            let lang = getLanguageFromUrl();
            let flagUrl = lang === 'sw' ? 'https://flagcdn.com/w40/tz.png' : 'https://flagcdn.com/w40/us.png';

            // Update both flags in navbar
            document.getElementById('selectedFlag').src = flagUrl;
            document.getElementById('selectedFlagLg').src = flagUrl;
        }

        // Run when the page loads to ensure correct flag is displayed
        document.addEventListener('DOMContentLoaded', setLanguageFlag);
    </script>


    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@novagecare.com"><i
                                        class="icofont-support-faq mr-2"></i>support@novagecare.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Dar Es Salaam,
                                Tanzania </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+255715303510">
                                <span>Call Now : +255-7153-03510 / +255-7464-86390</span>
                                <span class="h4"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="navbar-logo">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">@lang('messages.home')</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">@lang('messages.about')</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/service') }}">@lang('messages.service')</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">@lang('messages.blog')</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">@lang('messages.contact')</a>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">@lang('messages.login')</a> --}}
                        </li>
                        <div class="d-flex"> <a href="{{ url('/dashboard') }}" class="btn btn-main-2 btn-icon">@lang('messages.login')</a></div>
                        <div class="dropdown ms-3 d-none d-lg-flex">
                            <button class="btn btn-sm bg-white dropdown-toggle d-flex align-items-center" type="button"
                                id="languageDropdownLg" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="selectedFlagLg" src="https://flagcdn.com/w40/us.png" alt="English"
                                    width="25" class="me-1">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="languageDropdownLg">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="locale/en"
                                        onclick="changeLanguage('en')">
                                        <img src="https://flagcdn.com/w40/us.png" alt="English" width="20"
                                            class="me-2"> Eng
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="locale/sw"
                                        onclick="changeLanguage('sw')">
                                        <img src="https://flagcdn.com/w40/tz.png" alt="Swahili" width="20"
                                            class="me-2"> Swa
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>




    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        {{-- <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span><br></br> --}}
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
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>@lang('messages.hour_service')</span>
                            <h4 class="mb-3">@lang('messages.online_appointment')</h4>
                            <p class="mb-4">@lang('messages.get_aLL_time_support_for_emergency')</p>
                            {{-- <a href="appoinment.html" class="btn btn-main btn-round-full">@lang('messages.make_appointment')</a> --}}
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>@lang('messages.timing_schedule')</span>
                            <h4 class="mb-3">@lang('messages.working_hours')</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">@lang('messages.monday_to_friday') : <span>8:00 -
                                        17:00</span></li>
                                <li class="d-flex justify-content-between">@lang('messages.saturday') : <span>9:00 -
                                        17:00</span></li>
                                <li class="d-flex justify-content-between">@lang('messages.sunday') : <span>10:00 -
                                        17:00</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>@lang('messages.emergency_cases')</span>
                            <h4 class="mb-3">+255-7153-03510</h4>
                            <p>@lang('messages.emergency_cases_text')</p>
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
                        <img src="images/about/img-1.jpg" alt="" class="img-fluid">
                        <img src="images/about/img-2.jpg" alt="" class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="images/about/img-3.jpg" alt="" class="img-fluid">
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

    @section('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsection

    <section class="section appoinment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="appoinment-content">
                        <img src="images/about/img-3.jpg" alt="" class="img-fluid">
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

    {{-- <section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>We’re proud to collaborate with organizations that share our vision of empowering healthy aging. Together, we’re expanding access to holistic wellness for older adults across communities.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/1.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/2.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section> --}}

    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="{{ asset('images/logo.png') }}" alt="" class="navbar-logo">
                        </div>
                        <p>@lang('messages.footer_paragraph')</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href=""><i class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-instagram"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-youtube-play"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://wa.me/+255715303510" target="_blank"><i
                                        class="icofont-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">@lang('messages.service')</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="{{ url('/service') }}">Novage Nutrition</a></li>
                            <li><a href="{{ url('/service') }}">Novage Move</a></li>
                            <li><a href="{{ url('/service') }}">Novage Wellness</a></li>
                            <li><a href="{{ url('/service') }}">Novage Connect</a></li>
                            <li><a href="{{ url('/service') }}">Novage Mindfulness & Counselling</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">@lang('messages.support')</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="">@lang('messages.terms_conditions')</a></li>
                            <li><a href="">@lang('messages.privacy_policy')</a></li>
                            <li><a href="">@lang('messages.company_support')</a></li>
                            <li><a href="{{ url('/faq') }}">@lang('messages.faq')</a></li>
                            <li><a href="">@lang('messages.company_licence')</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">@lang('messages.get_in_touch')</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">@lang('messages.support_available')</span>
                            </div>
                            <h4 class="mt-2"><a href="mailto:support@novagecare.com">support@novagecare.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Sun : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+255715303510">+255-7153-03510</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; @lang('messages.copyright_reserved_to') <span class="text-color">NovageCare</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control" placeholder="@lang('messages.subscribe_placeholder')">
                                <a type="submit" href="mailto:support@novagecare.com"
                                    class="btn btn-main-2 btn-round-full">@lang('messages.subscribe')</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.easing.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="{{ asset('plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>


    {{-- Date Validity --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('appointmentDate').setAttribute('min', today);
        });
    </script>


</body>

</html>
