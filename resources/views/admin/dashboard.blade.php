<x-app-layout>

    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">

            <!-- Dashboard -->
            <div class="pcoded-navigatio-lavel">Main</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>

            <!-- Elders Management -->
            <div class="pcoded-navigatio-lavel">Elders Management</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="{{ route('admin.elders.index') }}">
                        <span class="pcoded-micon"><i class="ti-user"></i><b>E</b></span>
                        <span class="pcoded-mtext">All Elders</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.elders.create') }}">
                        <span class="pcoded-micon"><i class="ti-plus"></i><b>AE</b></span>
                        <span class="pcoded-mtext">Add New Elder</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.elders.reports') }}">
                        <span class="pcoded-micon"><i class="ti-bar-chart"></i><b>ER</b></span>
                        <span class="pcoded-mtext">Health Reports</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>

            <!-- Caregivers -->
            <div class="pcoded-navigatio-lavel">Caregivers</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="{{ route('admin.caregivers.index') }}">
                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>CG</b></span>
                        <span class="pcoded-mtext">All Caregivers</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.caregiver.assign') }}">
                        <span class="pcoded-micon"><i class="ti-exchange-vertical"></i><b>AC</b></span>
                        <span class="pcoded-mtext">Assign Caregivers</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.caregiver.performance') }}">
                        <span class="pcoded-micon"><i class="ti-pulse"></i><b>PM</b></span>
                        <span class="pcoded-mtext">Performance Metrics</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>

            <!-- Appointments -->
            <div class="pcoded-navigatio-lavel">Appointments</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="{{ route('admin.appointments.upcoming') }}">
                        <span class="pcoded-micon"><i class="ti-calendar"></i><b>UA</b></span>
                        <span class="pcoded-mtext">Upcoming Appointments</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.appointments.history') }}">
                        <span class="pcoded-micon"><i class="ti-time"></i><b>AH</b></span>
                        <span class="pcoded-mtext">Appointment History</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.appointments.create') }}">
                        <span class="pcoded-micon"><i class="ti-plus"></i><b>NA</b></span>
                        <span class="pcoded-mtext">Schedule New</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>

            <!-- Wellness Monitoring -->
            <div class="pcoded-navigatio-lavel">Wellness</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    {{-- <a href="{{ route('admin.wellness.checkins') }}"> --}}
                    <span class="pcoded-micon"><i class="ti-check-box"></i><b>WC</b></span>
                    <span class="pcoded-mtext">Daily Check-ins</span>
                    <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    {{-- <a href="{{ route('admin.wellness.alerts') }}"> --}}
                    <span class="pcoded-micon"><i class="ti-alert"></i><b>AL</b></span>
                    <span class="pcoded-mtext">Alerts</span>
                    <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>

            <!-- Reports -->
            <div class="pcoded-navigatio-lavel">Reports & Settings</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    {{-- <a href="{{ route('admin.reports.index') }}"> --}}
                    <span class="pcoded-micon"><i class="ti-clipboard"></i><b>RP</b></span>
                    <span class="pcoded-mtext">Reports</span>
                    <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    {{-- <a href="{{ route('admin.settings.profile') }}"> --}}
                    <span class="pcoded-micon"><i class="ti-settings"></i><b>ST</b></span>
                    <span class="pcoded-mtext">Settings</span>
                    <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>

            <!-- Logout -->
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="pcoded-micon"><i class="ti-power-off"></i><b>L</b></span>
                        <span class="pcoded-mtext">Logout</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
    </nav>

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="page-body">
                <div class="row">
                    <!-- Stats Cards -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Total Elders</h6>
                                <h2 class="text-right"><i class="ti-user f-left"></i><span>{{ $totalElders }}</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Caregivers</h6>
                                <h2 class="text-right"><i
                                        class="ti-user f-left"></i><span>{{ $totalCaregivers }}</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Appointments Today</h6>
                                <h2 class="text-right"><i
                                        class="ti-calendar f-left"></i><span>{{ $appointmentsToday }}</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Pending Requests</h6>
                                <h2 class="text-right"><i class="ti-alert f-left"></i><span>3</span></h2>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Elders Table -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Recent Elders</h5>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                                <th>Joined</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($recentElders as $elder)
                                                <tr>
                                                    <td>{{ $elder->name }}</td>
                                                    <td>{{ $elder->age ?? '-' }}</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-{{ $elder->status == 'active' ? 'success' : 'warning' }}">
                                                            {{ ucfirst($elder->status) }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $elder->created_at->format('Y-m-d') }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4">No recent elders found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Caregivers Assignment -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Caregivers Assignment</h5>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Caregiver Name</th>
                                                <th>Assigned Elders</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse ($caregivers as $caregiver)
                                                <tr>
                                                    <td>{{ $caregiver->name }}</td>
                                                    <td>{{ $caregiver->elders_count }}</td>
                                                    <td>
                                                        <span class="badge badge-{{ $caregiver->status == 'active' ? 'success' : 'warning' }}">
                                                            {{ ucfirst($caregiver->status) }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr><td colspan="3">No caregivers found.</td></tr>
                                            @endforelse --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Charts Section-->
                    <div class="row mt-4">
                        <!-- Elder Wellness Trend Chart -->
                        <div class="col-md-12 col-lg-6 mb-4">
                            <div class="card shadow-sm border-0">
                                <div
                                    class="card-header bg-c-blue text-white d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-0">📈 Elder Wellness Trends</h5>
                                        <span>Weekly average wellness scores</span>
                                    </div>
                                    <i class="ti-bar-chart"></i>
                                </div>
                                <div class="card-block p-4" style="background: #f8fafc;">
                                    <canvas id="elder-wellness-chart" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Appointment Trends Chart -->
                        <div class="col-md-12 col-lg-6 mb-4">
                            <div class="card shadow-sm border-0">
                                <div
                                    class="card-header bg-c-green text-white d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-0">📊 Appointment Trends</h5>
                                        <span>Appointments in the last 7 days</span>
                                    </div>
                                    <i class="ti-calendar"></i>
                                </div>
                                <div class="card-block p-4" style="background: #f8fafc;">
                                    <canvas id="appointments-chart" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Elder Wellness Chart
        const wellnessCtx = document.getElementById('elder-wellness-chart').getContext('2d');
        new Chart(wellnessCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Average Score',
                    data: [72, 74, 78, 70, 76, 80, 77],
                    backgroundColor: 'rgba(0, 150, 136, 0.2)',
                    borderColor: '#009688',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                }]
            }
        });

        // Appointment Chart
        const appointmentCtx = document.getElementById('appointments-chart').getContext('2d');
        new Chart(appointmentCtx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: '# of Appointments',
                    data: [5, 3, 7, 4, 6, 2, 5],
                    backgroundColor: '#FFC107'
                }]
            }
        });
    </script>
@endpush
