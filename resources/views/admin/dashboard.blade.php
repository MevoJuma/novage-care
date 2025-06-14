<x-app-layout>

    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">

            {{-- <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                    <a href="index.html">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>

            </ul>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Elders Management</div>
            {{-- <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Forms &amp; Tables</div> --}
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="form-elements-component.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>EM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">View Elders</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="bs-basic-table.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>EM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Register New Elder</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="form-components.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>EM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Elder Health Reports</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Caregivers</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="form-elements-component.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>UM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Caregivers</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="bs-basic-table.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>UM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Assign Caregivers</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="form-components.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>UM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Performance Metrics</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Appointments</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="form-elements-component.html">
                        <span class="pcoded-micon"><i class="ti-settings"></i><b>S</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Upcoming Appointments</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="bs-basic-table.html">
                        <span class="pcoded-micon"><i class="ti-user"></i><b>UM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Appointment History</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="form-components.html">
                        <span class="pcoded-micon"><i class="ti-help"></i><b>H</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Schedue New</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
 --}}

        {{-- Dashboard --}}
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-indigo-50 transition">
            <i class="ti-home mr-3 text-indigo-600"></i> Dashboard
        </a>

        <div class="pt-4 text-xs text-gray-400 uppercase tracking-wider">Manage</div>

        {{-- Elders --}}
        {{-- <a href="{{ route('admin.elders.index') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-indigo-50 transition"> --}}
            <i class="ti-user mr-3 text-indigo-600"></i> Elders
        </a>

        {{-- Caregivers --}}
        {{-- <a href="{{ route('admin.caregivers.index') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-indigo-50 transition"> --}}
            <i class="ti-id-badge mr-3 text-indigo-600"></i> Caregivers
        </a>

        {{-- Appointments --}}
        {{-- <a href="{{ route('admin.appointments.index') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-indigo-50 transition"> --}}
            <i class="ti-calendar mr-3 text-indigo-600"></i> Appointments
        </a>

        <div class="pt-4 text-xs text-gray-400 uppercase tracking-wider">Insights</div>

        {{-- Wellness --}}
        {{-- <a href="{{ route('admin.wellness.index') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-indigo-50 transition"> --}}
            <i class="ti-bar-chart mr-3 text-indigo-600"></i> Wellness
        </a>

        {{-- Tickets --}}
        {{-- <a href="{{ route('admin.tickets.index') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-indigo-50 transition"> --}}
            <i class="ti-comment-alt mr-3 text-indigo-600"></i> Tickets
        </a>

        {{-- Reports --}}
        {{-- <a href="{{ route('admin.reports.index') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-indigo-50 transition"> --}}
            <i class="ti-pie-chart mr-3 text-indigo-600"></i> Reports
        </a>

        <div class="pt-4 text-xs text-gray-400 uppercase tracking-wider">Settings</div>

        {{-- System Settings --}}
        {{-- <a href="{{ route('admin.settings') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-indigo-50 transition"> --}}
            <i class="ti-settings mr-3 text-indigo-600"></i> System
        </a>

        {{-- Logout --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left flex items-center px-3 py-2 rounded-md hover:bg-red-50 text-red-600 transition">
                <i class="ti-power-off mr-3"></i> Logout
            </button>
        </form>

        </div>
    </nav>
                        <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-chart-bar-graph bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Morris Chart</h4>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Charts</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#">Morris Chart</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- SITE VISIT CHART start -->
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Site visit chart</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="morris-site-visit"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- SITE VISIT CHART Ends -->
                                            <!-- Bar Chart start -->
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Bar chart</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="morris-bar-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Bar Chart Ends -->
                                            <!-- EXTRA AREA CHART start -->
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Extra area chart</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="morris-extra-area"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- EXTRA AREA CHART Ends -->
                                            <!-- Area Chart start -->
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Area chart</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="area-example"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Area Chart Ends -->
                                            <!-- LINE CHART start -->
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Line chart</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="line-example"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- LINE CHART Ends -->
                                            <!-- Donut chart start -->
                                            <div class="col-md-12 col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Donut chart</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="donut-example"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Donut chart Ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
</x-app-layout>
