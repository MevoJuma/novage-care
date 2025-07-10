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
                        <div class="page-header-title">
                            <h4>Register New Elder</h4>
                        </div>
                    </div>

                    <div class="page-body">
                        <div class="card">
                            <div class="card-header">
                                <h5>Elder Registration Form</h5>
                            </div>
                            <div class="card-block">
                                <form action="{{ route('admin.elders.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    {{-- Section 1: Personal Information --}}
                                    <h6 class="mb-3">Personal Information</h6>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="full_name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Date of Birth</label>
                                        <div class="col-sm-4">
                                            <input type="date" name="dob" class="form-control" required>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-4">
                                            <select name="gender" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">National ID / Elder ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="elder_id" class="form-control">
                                        </div>

                                        <label class="col-sm-2 col-form-label">Profile Photo</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="photo" class="form-control-file">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Contact Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="phone" class="form-control" required>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Email Address</label>
                                        <div class="col-sm-4">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>

                                    <hr>

                                    {{-- Section 2: Emergency Contact --}}
                                    <h6 class="mb-3">Emergency Contact</h6>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Contact Person</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="emergency_contact_name" class="form-control">
                                        </div>

                                        <label class="col-sm-2 col-form-label">Relationship</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="emergency_contact_relationship"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="emergency_contact_phone"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <hr>

                                    {{-- Section 3: Health & Wellness --}}
                                    <h6 class="mb-3">Health & Wellness Profile</h6>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Chronic Conditions</label>
                                        <div class="col-sm-10">
                                            <textarea name="chronic_conditions" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Allergies</label>
                                        <div class="col-sm-10">
                                            <textarea name="allergies" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mobility Status</label>
                                        <div class="col-sm-4">
                                            <select name="mobility_status" class="form-control">
                                                <option value="">Select</option>
                                                <option>Fully Mobile</option>
                                                <option>Wheelchair</option>
                                                <option>Bedridden</option>
                                            </select>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Mental Status</label>
                                        <div class="col-sm-4">
                                            <select name="mental_status" class="form-control">
                                                <option value="">Select</option>
                                                <option>Sound</option>
                                                <option>Forgetful</option>
                                                <option>Requires Monitoring</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr>

                                    {{-- Section 4: Address --}}
                                    <h6 class="mb-3">Location & Residence</h6>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Home Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">City/Town</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="city" class="form-control">
                                        </div>

                                        <label class="col-sm-2 col-form-label">Region</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="region" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Living Arrangement</label>
                                        <div class="col-sm-10">
                                            <select name="living_arrangement" class="form-control">
                                                <option value="">Select</option>
                                                <option>Alone</option>
                                                <option>With Family</option>
                                                <option>Nursing Home</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr>

                                    {{-- Section 5: Optional Assignments --}}
                                    <h6 class="mb-3">Optional Initial Assignment</h6>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Assign Caregiver</label>
                                        <div class="col-sm-10">
                                            <select name="caregiver_id" class="form-control">
                                                <option value="">Select Caregiver</option>
                                                {{-- Loop caregivers dynamically later --}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Initial Note</label>
                                        <div class="col-sm-10">
                                            <textarea name="initial_note" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    {{-- Submit --}}
                                    <div class="form-group row mt-4">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button type="submit" class="btn btn-primary">Register Elder</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end card-block -->
                        </div> <!-- end card -->
                    </div> <!-- end page-body -->
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
