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
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <h5 class="m-b-10">Upcoming Appointments</h5>
                                    <p class="mb-0">View and manage all upcoming appointments.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Appointments List</h5>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Client Name</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($appointments as $appointment)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $appointment->client_name }}</td>
                                                    <td>{{ $appointment->date->format('d M Y') }}</td>
                                                    <td>{{ $appointment->time }}</td>
                                                    <td>
                                                        <span
                                                            class="badge badge-info">{{ ucfirst($appointment->status) }}</span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.appointments.show', $appointment->id) }}"
                                                            class="btn btn-sm btn-primary">View</a>
                                                        <a href="{{ route('admin.appointments.edit', $appointment->id) }}"
                                                            class="btn btn-sm btn-warning">Edit</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No upcoming appointments
                                                        found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div class="mt-3">
                                        {{-- {{ $appointments->links() }} --}}
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
