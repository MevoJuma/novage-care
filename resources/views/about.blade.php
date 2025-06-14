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
          <span class="text-white">@lang('messages.about_us')</span>
          <h1 class="text-capitalize mb-5 text-lg">@lang('messages.about_us')</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h2 class="title-color">
                    @lang('messages.personal_care_for_your_healthy_living')
                </h2>
                {{-- <hr class="mt-3 mb-0" style="border-top: 3px solid #066d44; width: 60px;"> --}}
            </div>
            <div class="col-lg-8">
                <p class="">
                    @lang('messages.personal_care_for_your_healthy_living_p1')
                </p>
                <p class="">
                    @lang('messages.personal_care_for_your_healthy_living_p2')
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section about-page">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="title-color">@lang('messages.who_we_are')</h2>
            <div class="divider mx-auto my-3"></div>
            <p class="lead">@lang('messages.who_we_are_explanation')</p>
        </div>

        <div class="row">
            <!-- Mission -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 text-center p-3">
                    <div class="mb-3">
                        <i class="icofont-heart-beat-alt" style="font-size: 40px; color: #066d44;"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title" style="color: #066d44;">@lang('messages.our_mission')</h4>
                        <p class="card-text">@lang('messages.our_mission_explanation')</p>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 text-center p-3">
                    <div class="mb-3">
                        <i class="icofont-eye-alt" style="font-size: 40px; color: #066d44;"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title" style="color: #066d44;">@lang('messages.our_vision')</h4>
                        <p class="card-text">@lang('messages.our_vision_explanation')</p>
                    </div>
                </div>
            </div>

            <!-- Objectives -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 text-center p-3">
                    <div class="mb-3">
                        <i class="icofont-checked" style="font-size: 40px; color: #066d44;"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title" style="color: #066d44;">@lang('messages.our_objectives')</h4>
                        <p class="card-text">@lang('messages.our_objectives_explanation')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




{{-- <section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color">Our Partners </h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/1.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/2.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<section class="section team">
	<div class="container justify-center">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">@lang('messages.meet_our_team')</h2>
					<div class="divider mx-auto my-3"></div>
					<p class="lead">@lang('messages.team_explanation')</p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-3 col-md-6 col-sm-6 mb-4">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/1c.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="">Felistar William</a></h4>
						<p>CEO, Medical Doctor</p>

                        <!-- Bio Toggle Button -->
						<button class="btn btn-main btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#bioFelistar" aria-expanded="false" aria-controls="bioFelistar">@lang('messages.read_bio')</button>

						<!-- Bio Content -->
						<div class="collapse mt-3" id="bioFelistar">
							<p>@lang('messages.bio_felistar')</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/2.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="">Lilian Valerian</a></h4>
						<p>COO, Medical Doctor</p>

                        <!-- Bio Toggle Button -->
						<button class="btn btn-main btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#bioLilian" aria-expanded="false" aria-controls="bioLilian">@lang('messages.read_bio')</button>

						<!-- Bio Content -->
						<div class="collapse mt-3" id="bioLilian">
							<p>@lang('messages.bio_lilian')</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/3c.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="">Melvin Semgoja</a></h4>
						<p>CTO, Software Developer</p>

                        <!-- Bio Toggle Button -->
						<button class="btn btn-main btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#bioMelvin" aria-expanded="false" aria-controls="bioMelvin">@lang('messages.read_bio')</button>

						<!-- Bio Content -->
						<div class="collapse mt-3" id="bioMelvin">
							<p>@lang('messages.bio_melvin')</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- <section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4">What they say about us</h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				<div class="testimonial-block">
					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>

				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
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

    <!-- Bootstrap JS (at the bottom of the body for optimal page load performance) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  </body>
  </html>
