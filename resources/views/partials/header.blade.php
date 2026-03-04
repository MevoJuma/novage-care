<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><a href="mailto:support@novagecare.com"><i
                                    class="icofont-support-faq mr-2"></i>support@novagecare.com</a></li>
                        <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Dar Es Salaam,
                            Tanzania </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center text-lg-right top-right-bar mt-2 mt-lg-0">
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
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">@lang('messages.home')</a>
                    </li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/about') }}">@lang('messages.about')</a></li>
                    <li class="nav-item {{ request()->is('service') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/service') }}">@lang('messages.service')</a></li>
                    <li class="nav-item {{ request()->is('blog*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/blog') }}">@lang('messages.blog')</a></li>
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/contact') }}">@lang('messages.contact')</a></li>
                    <div class="d-flex"> <a href="{{ auth()->check() ? url('/dashboard') : route('login') }}" class="btn btn-main-2 btn-icon">@lang('messages.login')</a></div>
                    <div class="dropdown ms-3 d-none d-lg-flex">
                        <button class="btn btn-sm bg-white dropdown-toggle d-flex align-items-center" type="button"
                            id="languageDropdownLg" data-bs-toggle="dropdown" aria-expanded="false">
                            <img id="selectedFlagLg" src="https://flagcdn.com/w40/us.png" alt="English"
                                width="25" class="me-1">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdownLg">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ url('locale/en') }}">
                                    <img src="https://flagcdn.com/w40/us.png" alt="English" width="20"
                                        class="me-2"> Eng
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ url('locale/sw') }}">
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
