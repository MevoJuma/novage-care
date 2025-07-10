<x-app-layout>

    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">

            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                    <a href="index.html">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>

            </ul>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Forms &amp; Tables</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="form-elements-component.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="bs-basic-table.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Basic Table</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>

            </ul>

            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Chart &amp; Maps</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="chart.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Chart</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="map-google.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    {{--Page Header --}
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>Welcome, {{ Auth::user()->name }}</h4>
                            <span class="text-muted text-sm">{{ now()->format('l, F j, Y') }}</span>
                        </div>
                    </div>

                    {{-- Quick Stats --}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="text-muted">Next Appointment</h5>
                                    {{-- @if ($appointments->isNotEmpty()) --}}
                                        {{-- <p class="mt-2">{{ $appointments->first()->date }} @ {{ $appointments->first()->time}}</p> --}
                                    @else
                                        <p class="text-sm text-gray-500 mt-2">No upcoming appointments</p>
                                    {{-- @endif --}
                                </div>
                                <div> --}}
</x-app-layout>
