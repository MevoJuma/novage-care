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

            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>Assign Caregiver to Elder</h4>
                        </div>
                    </div>

                    <div class="page-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <div class="card">
                            <div class="card-header">
                                <h5>Assignment Form</h5>
                            </div>
                            <div class="card-block">
                                <form action="{{ route('admin.caregiver.assign') }}" method="POST">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Elder</label>
                                        <div class="col-sm-10">
                                            <select name="elder_id" class="form-control" required>
                                                <option value="">-- Choose Elder --</option>
                                                @foreach ($elders as $elder)
                                                    <option value="{{ $elder->id }}">{{ $elder->full_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Caregiver</label>
                                        <div class="col-sm-10">
                                            <select name="caregiver_id" class="form-control" required>
                                                <option value="">-- Choose Caregiver --</option>
                                                @foreach ($caregivers as $caregiver)
                                                    <option value="{{ $caregiver->id }}">{{ $caregiver->full_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-4">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button type="submit" class="btn btn-primary">Assign</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        {{-- Assigned Caregivers Section --}}
                        <div class="card mt-4">
                            <div class="card-header">
                                <h5>Current Caregiver Assignments</h5>
                            </div>
                            <div class="card-block">
                                @foreach ($elders as $elder)
                                    <div class="mb-3">
                                        <strong>{{ $elder->full_name }}</strong><br>
                                        @if ($elder->caregivers && $elder->caregivers->count())
                                            <ul>
                                                @foreach ($elder->caregivers as $caregiver)
                                                    <li>{{ $caregiver->full_name }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p class="text-muted">No caregivers assigned.</p>
                                        @endif
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- page-body -->

                </div>
            </div>
        </div>
    </div>

    {{-- <form action="{{ route('admin.caregiver.assign') }}" method="POST">
    @csrf

    <label>Select Elder:</label>
    <select name="elder_id" class="form-control" required>
        @foreach ($elders as $elder)
            <option value="{{ $elder->id }}">{{ $elder->full_name }}</option>
        @endforeach
    </select>

    <label>Select Caregiver:</label>
    <select name="caregiver_id" class="form-control" required>
        @foreach ($caregivers as $caregiver)
            <option value="{{ $caregiver->id }}">{{ $caregiver->full_name }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary mt-2">Assign Caregiver</button>
</form> --}}

</x-app-layout>
