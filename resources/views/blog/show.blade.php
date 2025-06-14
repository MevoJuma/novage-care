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
				<a class="nav-link" href="{{ url('/') }}">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
			    <li class="nav-item"><a class="nav-link" href="{{ url('/service') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
			    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Login/Register</a></li>

                {{-- <div class="language-switcher">
                    <a href="{{ route('lang.switch', 'en') }}">
                        <img src="/flags/en.png" alt="English" style="width:24px;">
                    </a>
                    <a href="{{ route('lang.switch', 'sw') }}">
                        <img src="/flags/sw.png" alt="Swahili" style="width:24px;">
                    </a>
                </div> --}}

			</ul>
		  </div>
		</div>
	</nav>
</header>




{{-- <section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-5 text-lg">Blog Single</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section> --}}



<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block">
                    <h1 class="text-capitalize mb-5 text-lg">{{ $post->title }}</h1>
                    <span class="text-white">Blog Details</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded">
                            <div class="blog-item-content mt-4">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-muted mr-3">
                                        {{-- <i class="icofont-folder mr-2"></i>{{ $post->category->name }} --}}
                                    </span>
                                    <span class="text-muted mr-3">
                                        <i class="icofont-calendar mr-2"></i>{{ $post->created_at->format('M d, Y') }}
                                    </span>
                                    <span class="text-muted">
                                        <i class="icofont-comment mr-2"></i>{{ $post->comments->count() }} Comments
                                    </span>
                                </div>

                                <h2 class="mb-4">{{ $post->title }}</h2>

                                <p>{!! nl2br(e($post->content)) !!}</p>

                                {{-- @if($post->tags->count())
                                    <div class="tag-option mt-4 mb-4">
                                        <strong>Tags: </strong>
                                        @foreach ($post->tags as $tag)
                                            <a href="#" class="badge badge-light">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                @endif --}}

                                <div class="social-share mt-5 clearfix">
                                    <ul class="list-inline float-left">
                                        <li class="list-inline-item">Share:</li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="col-lg-12">
                        <div class="comment-area mt-4 mb-5">
                            <h4 class="mb-4">{{ $post->comments->count() }} Comments</h4>

                            @foreach ($post->comments as $comment)
                                <div class="media mb-4">
                                    <img src="{{ asset('images/blog/user.jpg') }}" class="mr-3 rounded-circle" alt="User" width="50">
                                    <div class="media-body">
                                        <h6 class="mt-0">{{ $comment->name }}</h6>
                                        <small class="text-muted">{{ $comment->created_at->format('M d, Y') }}</small>
                                        <p class="mt-2">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form bg-light p-4 rounded">
                            <h4 class="mb-3">Leave a Comment</h4>
                            <form action="{{ route('comments.store', $post->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">

                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                                </div>

                                <div class="form-group">
                                    <textarea name="comment" rows="5" class="form-control" placeholder="Your Comment" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-main btn-round-full">Post Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                {{-- @include('blog.partials.sidebar') --}}
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
