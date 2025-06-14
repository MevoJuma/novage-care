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
		 	 <a class="navbar-brand" href="{{ url('/')}}">
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
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-5 text-lg">Blog articles</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap">
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    {{-- @auth --}}
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Blog title" required>
            </div>
            <div class="form-group">
                <textarea name="content" class="form-control" rows="5" placeholder="Write your blog..." required></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-main btn-round-full">Publish</button>
        </form>
    {{-- @endauth --}}

    @if(request('query'))
        <div class="col-lg-12 mb-3">
            <h4>Search results for "{{ request('query') }}":</h4>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
	                <div class="col-lg-12 col-md-12 mb-5">
                        @if ($posts->count())
		                    @foreach($posts as $post)
                                <div class="col-lg-12 col-md-12 mb-5">
                                    <div class="blog-item">
                                        <div class="blog-thumb">
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="blog-post-image">
                                        </div>
                                        <div class="blog-item-content">
                                            <div class="blog-item-meta mb-3 mt-4">
                                                <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>{{ $post->comments->count() ?? 0 }} Comments</span>
                                                <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> {{ $post->created_at->format('jS M Y') }}</span>
                                                <span class="text-muted"><i class="icofont-folder mr-1"></i> {{ $post->category->name ?? 'Uncategorized' }}</span>
                                            </div>

                                            <h2 class="mt-3 mb-3">
                                                <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                                            </h2>

                                            <p class="mb-4">{{ Str::limit(strip_tags($post->content), 150, '...') }}</p>

                                            <a href="{{ route('blog.show', $post->id) }}" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="row mt-5">
                                <div class="col-lg-8">
                                    {{ $posts->links() }}
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12">
                                {{-- <h3 class="text-center">No posts found.</h3> --}}
                                <p>No blog posts found{{ request('query') ? ' for "' . request('query') . '"' : '' }}.</p>
                            </div>
                        @endif
                    </div>
                </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
	                <div class="sidebar-widget search  mb-3 ">
		                <h5>Search Here</h5>
                        <form action="{{ route('blog') }}" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="query" class="form-control" placeholder="Search for posts..." value="{{ request('query') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-main btn-round-full" type="submit">Search</button>
                                </div>
                            </div>
                            {{-- <input type="text" name="query" class="form-control" placeholder="search"> --}}
                            {{-- <i class="ti-search"></i> --}}
                        </form>
	                </div>


	                <div class="sidebar-widget latest-post mb-3">
		                <h5>Popular Posts</h5>
                        @foreach($popularPosts as $popular)
                            <div class="py-2">
                                <span class="text-sm text-muted">{{ $popular->created_at->format('d M Y') }}</span>
                                <h6 class="my-2"><a href="{{ route('blog.show', $popular->id) }}">{{ $popular->title }}</a></h6>
                            </div>
                        @endforeach
	                </div>

	                <div class="sidebar-widget category mb-3">
		                <h5 class="mb-4">Categories</h5>

		                <ul class="list-unstyled">
                            @foreach($categories as $category)
                                <li><a href="{{ route('blog.category', $category->id) }}">{{ $category->name }} ({{ $category->posts_count }})</a></li>
                            @endforeach

		                {{-- <li class="align-items-center">
		                    <a href="#">Medicine</a>
		                    <span>(14)</span>
		                </li>
		                <li class="align-items-center">
		                    <a href="#">Equipments</a>
		                    <span>(2)</span>
		                </li>
		                <li class="align-items-center">
		                    <a href="#">Heart</a>
		                    <span>(10)</span>
		                </li>
		                <li class="align-items-center">
		                    <a href="#">Free counselling</a>
		                    <span>(5)</span>
		                </li>
		                <li class="align-items-center">
		                    <a href="#">Lab test</a>
		                    <span>(5)</span>
		                </li> --}}
		                </ul>
	                </div>


	                <div class="sidebar-widget tags mb-3">
		                <h5 class="mb-4">Tags</h5>
                            {{-- @foreach($tags as $tag)
                                <li><a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a></li>
                            @endforeach --}}


		                {{-- <a href="#">Doctors</a>
		                <a href="#">agency</a>
		                <a href="#">company</a>
		                <a href="#">medicine</a>
		                <a href="#">surgery</a>
		                <a href="#">Marketing</a>
		                <a href="#">Social Media</a>
		                <a href="#">Branding</a>
		                <a href="#">Laboratory</a> --}}
	                </div>


	                <div class="sidebar-widget schedule-widget mb-3">
		                <h5 class="mb-4">Time Schedule</h5>

		                <ul class="list-unstyled">
		                    <li class="d-flex justify-content-between align-items-center">
		                        <a href="#">Monday - Friday</a>
		                        <span>8:00 - 17:00</span>
		                    </li>
		                    <li class="d-flex justify-content-between align-items-center">
		                        <a href="#">Saturday</a>
		                        <span>9:00 - 17:00</span>
		                    </li>
                            <li class="d-flex justify-content-between align-items-center">
		                    <a href="#">Sunday</a>
		                    <span>10:00 - 17:00</span>
		                    </li>
		                </ul>

		                <div class="sidebar-contatct-info mt-4">
			                <p class="mb-0">Need Urgent Help?</p>
			                <h3>+255-7153-03510</h3>
		                </div>
	                </div>
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
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="mailto:support@novagecare.com">Support@novagecare.com</a></h4>
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
						&copy; Copyright Reserved to <span class="text-color">NovageCare</span>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
							<a type="submit" href="mailto:support@novagecare.com" class="btn btn-main-2 btn-round-full">Subscribe</a>
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
