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

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@novagecare.com"><i class="icofont-support-faq mr-2"></i>support@novagecare.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Dar Es Salaam, Tanzania </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+255715303510" >
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
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="{{ asset('images/logo.png')}}" alt="" class="navbar-logo">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{ url('/') }}">@lang('messages.home')</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">@lang('messages.about')</a></li>
			    <li class="nav-item"><a class="nav-link" href="{{ url('/service') }}">@lang('messages.service')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">@lang('messages.blog')</a></li>
			    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">@lang('messages.contact')</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">@lang('messages.login')</a></li> --}}
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



<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">@lang('messages.our_services')</span>
          <h1 class="text-capitalize mb-5 text-lg">@lang('messages.what_we_do')</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="images/about/about-1.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.nutrition_coaching')</h4>
						<p class="mb-4">@lang('messages.nutrition_coaching_explanation')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="images/about/about-2.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2  title-color">@lang('messages.therapeutic_movement')</h4>
						<p class="mb-4">@lang('messages.therapeutic_movement_explanation')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="images/about/about-5.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.mindfulness_counseling')</h4>
						<p class="mb-4">@lang('messages.mindfulness_counseling_explanation')</p>
					</div>
				</div>
			</div>

            <div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="images/about/about-4.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.community')</h4>
						<p class="mb-4">@lang('messages.community_explanation')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="images/about/about-8.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.virtual_consultation')</h4>
						<p class="mb-4">@lang('messages.virtual_consultation_explanation')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="images/about/about-3.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.wellness_tier')</h4>
						<p class="mb-4">@lang('messages.wellness_tier_explanation')</p>
					</div>
				</div>
			</div>

			{{-- <div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="images/about/about-7.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Flexible Subscriptions</h4>
						<p class="mb-4">Choose a wellness plan that works for your lifestyle and budget, with both mobile and USSD access options available.</p>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
</section>

<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">@lang('messages.we_are_pleased')</h2>
					<a href="{{ url('/contact') }}" class="btn btn-main-2 btn-round-full">@lang('messages.get_in_touch')<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="{{ asset('images/logo.png')}}" alt="" class="navbar-logo">
					</div>
					<p>@lang('messages.footer_paragraph')</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href=""><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="icofont-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="icofont-instagram"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="icofont-youtube-play"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/+255715303510" target="_blank"><i class="icofont-whatsapp"></i></a></li>
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
							<a type="submit" href="mailto:support@novagecare.com" class="btn btn-main-2 btn-round-full">@lang('messages.subscribe')</a>
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
    <script src="{{ asset('plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/counterup/jquery.easing.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Counterup -->
    <script src="{{ asset('plugins/counterup/jquery.waypoints.min.js')}}"></script>

    <script src="{{ asset('plugins/shuffle/shuffle.min.js')}}"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js')}}"></script>
    <!-- Google Map -->
    <script src="{{ asset('plugins/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="{{ asset('js/script.js')}}"></script>
    <script src="{{ asset('js/contact.js')}}"></script>

  </body>
  </html>
