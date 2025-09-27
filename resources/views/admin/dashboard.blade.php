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
                    <a href="{{ route('admin.wellness.checkins') }}">
                        <span class="pcoded-micon"><i class="ti-check-box"></i><b>WC</b></span>
                        <span class="pcoded-mtext">Daily Check-ins</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.wellness.alerts') }}">
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
                    <a href="{{ route('admin.reports.index') }}">
                        <span class="pcoded-micon"><i class="ti-clipboard"></i><b>RP</b></span>
                        <span class="pcoded-mtext">Reports</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.settings.profile') }}">
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
                <!-- Critical Alerts Section -->
                @if (isset($criticalAlerts) &&
                        ($criticalAlerts['missed_appointments'] > 0 ||
                            $criticalAlerts['low_wellness_scores'] > 0 ||
                            $criticalAlerts['overdue_checkins'] > 0))
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>⚠️ Critical Alerts:</strong>
                                @if ($criticalAlerts['missed_appointments'] > 0)
                                    {{ $criticalAlerts['missed_appointments'] }} missed appointments today.
                                @endif
                                @if ($criticalAlerts['low_wellness_scores'] > 0)
                                    {{ $criticalAlerts['low_wellness_scores'] }} elders with low wellness scores.
                                @endif
                                @if ($criticalAlerts['overdue_checkins'] > 0)
                                    {{ $criticalAlerts['overdue_checkins'] }} elders haven't checked in today.
                                @endif
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <!-- Stats Cards -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Total Elders</h6>
                                <h2 class="text-right">
                                    <i class="ti-user f-left"></i>
                                    <span>{{ $totalElders }}</span>
                                </h2>
                                <p class="m-b-0">Active registrations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Caregivers</h6>
                                <h2 class="text-right">
                                    <i class="ti-id-badge f-left"></i>
                                    <span>{{ $totalCaregivers }}</span>
                                </h2>
                                <p class="m-b-0">Available staff</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Appointments Today</h6>
                                <h2 class="text-right">
                                    <i class="ti-calendar f-left"></i>
                                    <span>{{ $appointmentsToday }}</span>
                                </h2>
                                <p class="m-b-0">Scheduled for today</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Pending Requests</h6>
                                <h2 class="text-right">
                                    <i class="ti-alert f-left"></i>
                                    <span>{{ $pendingRequests }}</span>
                                </h2>
                                <p class="m-b-0">Awaiting approval</p>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Elders Table -->
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>Recent Elders</h5>
                                <div class="card-header-right">
                                    <a href="{{ route('admin.elders.index') }}" class="btn btn-sm btn-primary">View
                                        All</a>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                                <th>Last Check-in</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($recentElders as $elder)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ $elder->avatar ?? '/assets/images/user-avatar.png' }}"
                                                                alt="Avatar" class="rounded-circle me-2"
                                                                width="30" height="30">
                                                            <span class="ms-2">{{ $elder->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{ $elder->age ?? '-' }}</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-{{ $elder->status == 'active' ? 'success' : 'warning' }}">
                                                            {{ ucfirst($elder->status) }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $elder->last_checkin ? $elder->last_checkin->diffForHumans() : 'Never' }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.elders.show', $elder->id) }}"
                                                            class="btn btn-sm btn-info">
                                                            <i class="ti-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">No recent elders found.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->

                    <div class="col-xl-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Quick Actions</h5>
                                <span class="text-muted small">Shortcuts</span>
                            </div>
                            <div class="card-block p-4" style="background: #f8fafc;">
                                <div class="d-flex flex-column" style="gap: 0.75rem;">
                                    <a href="{{ route('admin.elders.create') }}"
                                        class="btn btn-sm btn-gradient-primary d-flex align-items-center justify-content-center"
                                        style="font-weight: 500; border-radius: 6px; box-shadow: 0 2px 8px rgba(102,126,234,0.08);">
                                        <i class="ti-plus me-2"></i> Add New Elder
                                    </a>
                                    <a href="{{ route('admin.appointments.create') }}"
                                        class="btn btn-sm btn-gradient-success d-flex align-items-center justify-content-center"
                                        style="font-weight: 500; border-radius: 6px; box-shadow: 0 2px 8px rgba(56,239,125,0.08);">
                                        <i class="ti-calendar me-2"></i> Schedule Appointment
                                    </a>
                                    <a href="{{ route('admin.wellness.alerts') }}"
                                        class="btn btn-sm btn-gradient-warning d-flex align-items-center justify-content-center"
                                        style="font-weight: 500; border-radius: 6px; box-shadow: 0 2px 8px rgba(245,158,11,0.08);">
                                        <i class="ti-alert me-2"></i> View Alerts
                                    </a>
                                    <a href="{{ route('admin.reports.index') }}"
                                        class="btn btn-sm btn-gradient-info d-flex align-items-center justify-content-center"
                                        style="font-weight: 500; border-radius: 6px; box-shadow: 0 2px 8px rgba(59,130,246,0.08);">
                                        <i class="ti-clipboard me-2"></i> Generate Report
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .btn-gradient-primary {
                            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                            color: #fff;
                            border: none;
                        }
                        .btn-gradient-success {
                            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
                            color: #fff;
                            border: none;
                        }
                        .btn-gradient-warning {
                            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
                            color: #fff;
                            border: none;
                        }
                        .btn-gradient-info {
                            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
                            color: #fff;
                            border: none;
                        }
                        .btn-gradient-primary:hover,
                        .btn-gradient-success:hover,
                        .btn-gradient-warning:hover,
                        .btn-gradient-info:hover {
                            opacity: 0.92;
                            box-shadow: 0 4px 16px rgba(0,0,0,0.10);
                            transform: translateY(-2px);
                        }
                    </style>

                    <!-- Caregivers Assignment -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Caregivers Assignment</h5>
                                <div class="card-header-right">
                                    <a href="{{ route('admin.caregivers.index') }}"
                                        class="btn btn-sm btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Caregiver Name</th>
                                                <th>Assigned Elders</th>
                                                <th>Workload</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($caregivers as $caregiver)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ $caregiver->avatar ?? '/assets/images/user-avatar.png' }}"
                                                                alt="Avatar" class="rounded-circle me-2"
                                                                width="30" height="30">
                                                            <span class="ms-2">{{ $caregiver->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{ $caregiver->elders_count ?? 0 }}</td>
                                                    <td>
                                                        @php
                                                            $workload = $caregiver->elders_count ?? 0;
                                                            $workloadClass =
                                                                $workload > 8
                                                                    ? 'danger'
                                                                    : ($workload > 5
                                                                        ? 'warning'
                                                                        : 'success');
                                                        @endphp
                                                        <div class="progress" style="height: 20px;">
                                                            <div class="progress-bar bg-{{ $workloadClass }}"
                                                                style="width: {{ min(100, ($workload / 10) * 100) }}%">
                                                                {{ $workload }}/10
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge badge-{{ $caregiver->status == 'active' ? 'success' : 'warning' }}">
                                                            {{ ucfirst($caregiver->status) }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.caregivers.show', $caregiver->id) }}"
                                                            class="btn btn-sm btn-info">
                                                            <i class="ti-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.caregiver.assign') }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="ti-plus"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">No caregivers found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Charts Section -->
                <!-- Enhanced Charts Section with Professional Styling -->
                <div class="row mt-4">
                    <!-- Elder Wellness Trend Chart -->
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-header bg-gradient-primary text-white border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-1 font-weight-bold">
                                            <i class="ti-pulse me-2"></i>Elder Wellness Trends
                                        </h5>
                                        <small class="opacity-75">Weekly average wellness scores</small>
                                    </div>
                                    <div class="chart-header-actions">
                                        <div class="dropdown">
                                            <button class="btn btn-link text-white p-0" type="button"
                                                id="wellnessDropdown" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ti-more-alt"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="wellnessDropdown">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-download me-1"></i>Export Data</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-printer me-1"></i>Print Chart</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('admin.reports.index') }}">
                                                    <i class="ti-bar-chart me-1"></i>Detailed Report
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="chart-container"
                                    style="position: relative; height: 320px; padding: 20px;">
                                    <canvas id="elder-wellness-chart"></canvas>
                                </div>
                                <!-- Chart Legend/Summary -->
                                <div class="chart-summary border-top px-3 py-2 bg-light">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-success font-weight-bold"
                                                    id="wellness-avg">--</span>
                                                <br><small class="text-muted">Avg Score</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-primary font-weight-bold"
                                                    id="wellness-trend">--</span>
                                                <br><small class="text-muted">Trend</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-warning font-weight-bold"
                                                    id="wellness-alerts">--</span>
                                                <br><small class="text-muted">Alerts</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Appointment Trends Chart -->
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-header bg-gradient-success text-white border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-1 font-weight-bold">
                                            <i class="ti-calendar me-2"></i>Appointment Analytics
                                        </h5>
                                        <small class="opacity-75">Daily appointment statistics</small>
                                    </div>
                                    <div class="chart-header-actions">
                                        <div class="dropdown">
                                            <button class="btn btn-link text-white p-0" type="button"
                                                id="appointmentDropdown" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ti-more-alt"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="appointmentDropdown">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-download me-1"></i>Export Data</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-printer me-1"></i>Print Chart</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.appointments.index') }}">
                                                    <i class="ti-calendar me-1"></i>View All Appointments
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="chart-container"
                                    style="position: relative; height: 320px; padding: 20px;">
                                    <canvas id="appointments-chart"></canvas>
                                </div>
                                <!-- Chart Legend/Summary -->
                                <div class="chart-summary border-top px-3 py-2 bg-light">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-success font-weight-bold"
                                                    id="appointment-total">--</span>
                                                <br><small class="text-muted">Total</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-primary font-weight-bold"
                                                    id="appointment-avg">--</span>
                                                <br><small class="text-muted">Daily Avg</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-warning font-weight-bold"
                                                    id="appointment-pending">--</span>
                                                <br><small class="text-muted">Pending</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Analytics Row -->
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-header bg-gradient-info text-white border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-1 font-weight-bold">
                                            <i class="ti-pie-chart me-2"></i>Care Distribution
                                        </h5>
                                        <small class="opacity-75">Caregiver workload distribution</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="chart-container"
                                    style="position: relative; height: 320px; padding: 20px;">
                                    <canvas id="care-distribution-chart"></canvas>
                                </div>
                                <!-- Chart Legend/Summary -->
                                <div class="chart-summary border-top px-3 py-2 bg-light">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-success font-weight-bold"
                                                    id="optimal-load">--</span>
                                                <br><small class="text-muted">Optimal</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-warning font-weight-bold"
                                                    id="high-load">--</span>
                                                <br><small class="text-muted">High Load</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-danger font-weight-bold"
                                                    id="overload">--</span>
                                                <br><small class="text-muted">Overload</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Response Times -->
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-header bg-gradient-warning text-white border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-1 font-weight-bold">
                                            <i class="ti-timer me-2"></i>Response Metrics
                                        </h5>
                                        <small class="opacity-75">Emergency response times (minutes)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="chart-container"
                                    style="position: relative; height: 320px; padding: 20px;">
                                    <canvas id="response-times-chart"></canvas>
                                </div>
                                <!-- Chart Legend/Summary -->
                                <div class="chart-summary border-top px-3 py-2 bg-light">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-success font-weight-bold"
                                                    id="avg-response">--</span>
                                                <br><small class="text-muted">Avg Time</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-primary font-weight-bold"
                                                    id="target-met">--</span>
                                                <br><small class="text-muted">Target Met</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="chart-stat">
                                                <span class="stat-value text-danger font-weight-bold"
                                                    id="escalations">--</span>
                                                <br><small class="text-muted">Escalated</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

<!-- Custom CSS for Professional Styling -->
<style>
    /* Gradient Backgrounds for Chart Headers */
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    }

    .bg-gradient-success {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%) !important;
    }

    .bg-gradient-info {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%) !important;
    }

    .bg-gradient-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
    }

    /* Chart Container Styling */
    .chart-container {
        background: linear-gradient(145deg, #f8fafc, #e2e8f0);
        border-radius: 0 0 8px 8px;
    }

    /* Chart Summary Stats */
    .chart-summary {
        background: linear-gradient(145deg, #f1f5f9, #e2e8f0) !important;
        border-radius: 0 0 0.375rem 0.375rem;
    }

    .chart-stat {
        transition: all 0.3s ease;
        padding: 5px;
        border-radius: 4px;
    }

    .chart-stat:hover {
        background: rgba(255, 255, 255, 0.8);
        transform: translateY(-2px);
    }

    .stat-value {
        font-size: 1.2rem;
        display: inline-block;
        transition: all 0.3s ease;
    }

    /* Card Enhancements */
    .card {
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        border: none !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    /* Dropdown Menu Styling */
    .dropdown-menu {
        border: none;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .dropdown-item {
        transition: all 0.2s ease;
        border-radius: 4px;
        margin: 2px 4px;
    }

    .dropdown-item:hover {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        transform: translateX(5px);
    }

    /* Loading Animation */
    @keyframes pulse {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }

    .chart-loading {
        animation: pulse 2s infinite;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .chart-container {
            height: 250px !important;
            padding: 15px !important;
        }

        .chart-summary .col-4 {
            margin-bottom: 10px;
        }
    }
</style>

@php
    $wellnessData = $wellnessData ?? [
        'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        'data' => [72, 74, 78, 70, 76, 80, 77],
    ];
    $appointmentData = $appointmentData ?? [
        'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        'data' => [5, 3, 7, 4, 6, 2, 5],
    ];
@endphp

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Dynamic chart data from backend
        const wellnessData = @json($wellnessData);
        const appointmentData = @json($appointmentData);

        // Elder Wellness Chart
        const wellnessCtx = document.getElementById('elder-wellness-chart').getContext('2d');
        new Chart(wellnessCtx, {
            type: 'line',
            data: {
                labels: wellnessData.labels,
                datasets: [{
                    label: 'Average Score',
                    data: wellnessData.data,
                    backgroundColor: 'rgba(0, 150, 136, 0.2)',
                    borderColor: '#009688',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#009688',
                    pointBorderWidth: 2,
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            stepSize: 20
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });

        // Appointment Chart
        const appointmentCtx = document.getElementById('appointments-chart').getContext('2d');
        new Chart(appointmentCtx, {
            type: 'bar',
            data: {
                labels: appointmentData.labels,
                datasets: [{
                    label: '# of Appointments',
                    data: appointmentData.data,
                    backgroundColor: '#FFC107',
                    borderColor: '#FF8F00',
                    borderWidth: 1,
                    borderRadius: 4,
                    borderSkipped: false,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });

        // Auto-refresh charts every 5 minutes
        setInterval(function() {
            location.reload();
        }, 300000); // 5 minutes
    </script>
@endpush
