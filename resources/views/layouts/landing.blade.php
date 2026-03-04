<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="Novage Care">

    <title>@yield('title', 'Novage Care')</title>

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

    @stack('styles')
</head>

<body id="top">

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
            var elLg = document.getElementById('selectedFlagLg');
            if (elLg) elLg.src = flagUrl;
            var el = document.getElementById('selectedFlag');
            if (el) el.src = flagUrl;
        }

        document.addEventListener('DOMContentLoaded', setLanguageFlag);
    </script>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>

    @stack('scripts')
</body>

</html>
