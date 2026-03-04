@extends('layouts.landing')

@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">@lang('messages.our_services')</span>
          <h1 class="text-capitalize mb-5 text-lg">@lang('messages.what_we_do')</h1>
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
					<img src="{{ asset('images/about/about-1.jpg') }}" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.nutrition_coaching')</h4>
						<p class="mb-4">@lang('messages.nutrition_coaching_explanation')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="{{ asset('images/about/about-2.jpg') }}" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2  title-color">@lang('messages.therapeutic_movement')</h4>
						<p class="mb-4">@lang('messages.therapeutic_movement_explanation')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="{{ asset('images/about/about-5.jpg') }}" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.mindfulness_counseling')</h4>
						<p class="mb-4">@lang('messages.mindfulness_counseling_explanation')</p>
					</div>
				</div>
			</div>

            <div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="{{ asset('images/about/about-4.jpg') }}" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.community')</h4>
						<p class="mb-4">@lang('messages.community_explanation')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="{{ asset('images/about/about-8.jpg') }}" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.virtual_consultation')</h4>
						<p class="mb-4">@lang('messages.virtual_consultation_explanation')</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="{{ asset('images/about/about-3.jpg') }}" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">@lang('messages.wellness_tier')</h4>
						<p class="mb-4">@lang('messages.wellness_tier_explanation')</p>
					</div>
				</div>
			</div>
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
@endsection
