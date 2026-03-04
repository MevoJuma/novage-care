@extends('layouts.landing')

@section('content')
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
					<img src="{{ asset('images/team/1c.jpg') }}" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="">Felistar William</a></h4>
						<p>CEO, Medical Doctor</p>

                        <button class="btn btn-main btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#bioFelistar" aria-expanded="false" aria-controls="bioFelistar">@lang('messages.read_bio')</button>

						<div class="collapse mt-3" id="bioFelistar">
							<p>@lang('messages.bio_felistar')</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="{{ asset('images/team/2.jpg') }}" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="">Lilian Valerian</a></h4>
						<p>COO, Medical Doctor</p>

                        <button class="btn btn-main btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#bioLilian" aria-expanded="false" aria-controls="bioLilian">@lang('messages.read_bio')</button>

						<div class="collapse mt-3" id="bioLilian">
							<p>@lang('messages.bio_lilian')</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="{{ asset('images/team/3c.jpg') }}" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="">Melvin Semgoja</a></h4>
						<p>CTO, Software Developer</p>

                        <button class="btn btn-main btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#bioMelvin" aria-expanded="false" aria-controls="bioMelvin">@lang('messages.read_bio')</button>

						<div class="collapse mt-3" id="bioMelvin">
							<p>@lang('messages.bio_melvin')</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush
