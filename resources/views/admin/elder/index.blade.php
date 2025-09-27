<x-app-layout>
    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">
            <!-- Dashboard -->
            <div class="pcoded-navigatio-lavel">Main</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
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
                <li class="active">
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

                    <!-- Page Header -->
                    <div class="page-header card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-1">👥 Elders Management</h4>
                                    <p class="text-muted mb-0">Manage and monitor elderly care recipients</p>
                                </div>
                                <div class="header-actions">
                                    <a href="{{ route('admin.elders.create') }}" class="btn btn-primary">
                                        <i class="ti-plus me-1"></i>Add New Elder
                                    </a>
                                    <button class="btn btn-outline-secondary" onclick="exportElders()">
                                        <i class="ti-download me-1"></i>Export
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Cards -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card bg-gradient-primary text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1 opacity-75">Total Elders</h6>
                                            <h3 class="mb-0">{{ $elders->total() ?? $elders->count() }}</h3>
                                        </div>
                                        <div class="stat-icon">
                                            <i class="ti-user f-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-gradient-success text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1 opacity-75">Active Elders</h6>
                                            <h3 class="mb-0">{{ $elders->where('status', 'active')->count() }}</h3>
                                        </div>
                                        <div class="stat-icon">
                                            <i class="ti-check f-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-gradient-warning text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1 opacity-75">Need Attention</h6>
                                            <h3 class="mb-0">
                                                {{ $elders->where('wellness_score', '<', 60)->count() ?? 0 }}</h3>
                                        </div>
                                        <div class="stat-icon">
                                            <i class="ti-alert f-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-gradient-info text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1 opacity-75">Avg Age</h6>
                                            <h3 class="mb-0">{{ round($elders->avg('age') ?? 75) }}</h3>
                                        </div>
                                        <div class="stat-icon">
                                            <i class="ti-calendar f-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advanced Filters -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <i class="ti-filter me-2"></i>Advanced Filters
                                <button class="btn btn-link btn-sm float-end" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#advancedFilters"
                                    aria-expanded="false">
                                    <i class="ti-angle-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="advancedFilters">
                            <div class="card-body">
                                <form method="GET" action="{{ route('admin.elders.index') }}">
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Search Name/Email</label>
                                            <input type="text" name="search" value="{{ request('search') }}"
                                                class="form-control" placeholder="Search by name or email">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Status</label>
                                            <select name="status" class="form-select">
                                                <option value="">All Statuses</option>
                                                <option value="active"
                                                    {{ request('status') == 'active' ? 'selected' : '' }}>Active
                                                </option>
                                                <option value="inactive"
                                                    {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Age Range</label>
                                            <select name="age_range" class="form-select">
                                                <option value="">All Ages</option>
                                                <option value="60-70"
                                                    {{ request('age_range') == '60-70' ? 'selected' : '' }}>60-70
                                                </option>
                                                <option value="71-80"
                                                    {{ request('age_range') == '71-80' ? 'selected' : '' }}>71-80
                                                </option>
                                                <option value="81-90"
                                                    {{ request('age_range') == '81-90' ? 'selected' : '' }}>81-90
                                                </option>
                                                <option value="90+"
                                                    {{ request('age_range') == '90+' ? 'selected' : '' }}>90+</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Joined After</label>
                                            <input type="date" name="joined_after"
                                                value="{{ request('joined_after') }}" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Joined Before</label>
                                            <input type="date" name="joined_before"
                                                value="{{ request('joined_before') }}" class="form-control">
                                        </div>
                                        <div class="col-md-1 d-flex align-items-end">
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="ti-search"></i>
                                                </button>
                                                <a href="{{ route('admin.elders.index') }}"
                                                    class="btn btn-outline-secondary">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Main Elders Table -->
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">📋 Elders Directory</h5>
                                <div class="table-controls">
                                    <input type="text" class="form-control form-control-sm d-inline-block w-auto"
                                        id="quickSearch" placeholder="Quick search..."
                                        style="width: 200px !important;">
                                    <div class="btn-group ms-2" role="group">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="changeView('card')">
                                            <i class="ti-view-grid"></i>
                                        </button>
                                        <button class="btn btn-outline-secondary btn-sm active"
                                            onclick="changeView('table')">
                                            <i class="ti-view-list"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <!-- Table View -->
                            <div id="tableView" class="table-responsive">
                                <table class="table table-hover align-middle mb-0" id="eldersTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input type="checkbox" id="selectAll" class="form-check-input">
                                                </div>
                                            </th>
                                            <th>Elder Profile</th>
                                            <th>Contact Info</th>
                                            <th>Care Details</th>
                                            <th>Health Status</th>
                                            <th>Last Activity</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($elders as $elder)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input elder-checkbox"
                                                            value="{{ $elder->id }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-circle me-3">
                                                            @if ($elder->avatar)
                                                                <img src="{{ $elder->avatar }}"
                                                                    alt="{{ $elder->name }}" class="rounded-circle"
                                                                    width="50" height="50">
                                                            @else
                                                                <div class="avatar-placeholder">
                                                                    {{ strtoupper(substr($elder->name, 0, 2)) }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1 fw-bold">{{ $elder->name }}</h6>
                                                            <small class="text-muted">Age:
                                                                {{ $elder->age ?? 'N/A' }}</small>
                                                            <br><small class="text-muted">ID:
                                                                #{{ $elder->id }}</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <i class="ti-email me-1 text-primary"></i>{{ $elder->email }}
                                                        <br>
                                                        <i
                                                            class="ti-mobile me-1 text-success"></i>{{ $elder->phone ?? 'N/A' }}
                                                        <br>
                                                        <i
                                                            class="ti-location-pin me-1 text-warning"></i>{{ $elder->address ?? 'N/A' }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="care-info">
                                                        <span class="badge bg-info mb-1">
                                                            {{ $elder->appointments->count() ?? 0 }} Appointments
                                                        </span>
                                                        <br>
                                                        <span class="badge bg-secondary mb-1">
                                                            {{ $elder->caregiver->name ?? 'Unassigned' }}
                                                        </span>
                                                        <br>
                                                        <small class="text-muted">
                                                            Plan: {{ $elder->care_plan ?? 'Basic' }}
                                                        </small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="health-status">
                                                        @php
                                                            $score = $elder->wellness_score ?? rand(60, 95);
                                                            $statusClass =
                                                                $score >= 80
                                                                    ? 'success'
                                                                    : ($score >= 60
                                                                        ? 'warning'
                                                                        : 'danger');
                                                            $statusText =
                                                                $score >= 80
                                                                    ? 'Good'
                                                                    : ($score >= 60
                                                                        ? 'Fair'
                                                                        : 'Needs Attention');
                                                        @endphp
                                                        <div class="d-flex align-items-center mb-1">
                                                            <div class="progress flex-grow-1 me-2"
                                                                style="height: 8px;">
                                                                <div class="progress-bar bg-{{ $statusClass }}"
                                                                    style="width: {{ $score }}%"></div>
                                                            </div>
                                                            <span
                                                                class="badge bg-{{ $statusClass }}">{{ $score }}%</span>
                                                        </div>
                                                        <small class="text-muted">{{ $statusText }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($elder->last_checkin)
                                                        <span class="text-success">
                                                            <i class="ti-check-box me-1"></i>
                                                            {{ $elder->last_checkin->diffForHumans() }}
                                                        </span>
                                                    @else
                                                        <span class="text-muted">
                                                            <i class="ti-time me-1"></i>
                                                            Never checked in
                                                        </span>
                                                    @endif
                                                    <br>
                                                    <small class="text-muted">
                                                        Joined: {{ $elder->created_at->format('M d, Y') }}
                                                    </small>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button class="btn btn-outline-info btn-sm"
                                                            onclick="viewElder({{ $elder->id }})"
                                                            title="View Details">
                                                            <i class="ti-eye"></i>
                                                        </button>
                                                        <a href="{{ route('admin.elders.edit', $elder->id) }}"
                                                            class="btn btn-outline-primary btn-sm" title="Edit">
                                                            <i class="ti-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-outline-success btn-sm"
                                                            onclick="scheduleAppointment({{ $elder->id }})"
                                                            title="Schedule Appointment">
                                                            <i class="ti-calendar"></i>
                                                        </button>
                                                        <div class="btn-group" role="group">
                                                            <button
                                                                class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                                data-bs-toggle="dropdown" title="More Actions">
                                                                <i class="ti-more-alt"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"
                                                                        onclick="sendMessage({{ $elder->id }})">
                                                                        <i class="ti-email me-2"></i>Send Message</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"
                                                                        onclick="viewHealthReport({{ $elder->id }})">
                                                                        <i class="ti-clipboard me-2"></i>Health
                                                                        Report</a></li>
                                                                <li><a class="dropdown-item" href="#"
                                                                        onclick="assignCaregiver({{ $elder->id }})">
                                                                        <i class="ti-user me-2"></i>Assign
                                                                        Caregiver</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item text-danger"
                                                                        href="#"
                                                                        onclick="confirmDelete({{ $elder->id }})">
                                                                        <i class="ti-trash me-2"></i>Delete Elder</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center py-5">
                                                    <div class="empty-state">
                                                        <i class="ti-user f-48 text-muted mb-3"></i>
                                                        <h5 class="text-muted">No elders found</h5>
                                                        <p class="text-muted">Try adjusting your search criteria or add
                                                            a new elder.</p>
                                                        <a href="{{ route('admin.elders.create') }}"
                                                            class="btn btn-primary">
                                                            <i class="ti-plus me-1"></i>Add New Elder
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <!-- Card View (Hidden by default) -->
                            <div id="cardView" class="row g-3 p-3" style="display: none;">
                                @foreach ($elders as $elder)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card elder-card h-100">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-circle me-3">
                                                        @if ($elder->avatar)
                                                            <img src="{{ $elder->avatar }}"
                                                                alt="{{ $elder->name }}" class="rounded-circle"
                                                                width="50" height="50">
                                                        @else
                                                            <div class="avatar-placeholder">
                                                                {{ strtoupper(substr($elder->name, 0, 2)) }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="card-title mb-1">{{ $elder->name }}</h6>
                                                        <small class="text-muted">Age {{ $elder->age ?? 'N/A' }} • ID
                                                            #{{ $elder->id }}</small>
                                                    </div>
                                                    <span
                                                        class="badge bg-{{ $elder->status == 'active' ? 'success' : 'warning' }}">
                                                        {{ ucfirst($elder->status) }}
                                                    </span>
                                                </div>

                                                <div class="elder-details">
                                                    <p class="mb-2"><i
                                                            class="ti-email me-2 text-primary"></i>{{ $elder->email }}
                                                    </p>
                                                    <p class="mb-2"><i
                                                            class="ti-calendar me-2 text-info"></i>{{ $elder->appointments->count() ?? 0 }}
                                                        appointments</p>
                                                    <p class="mb-3"><i
                                                            class="ti-user me-2 text-success"></i>{{ $elder->caregiver->name ?? 'Unassigned' }}
                                                    </p>
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <button class="btn btn-outline-primary btn-sm"
                                                        onclick="viewElder({{ $elder->id }})">
                                                        <i class="ti-eye me-1"></i>View
                                                    </button>
                                                    <button class="btn btn-outline-success btn-sm"
                                                        onclick="scheduleAppointment({{ $elder->id }})">
                                                        <i class="ti-calendar me-1"></i>Schedule
                                                    </button>
                                                    <a href="{{ route('admin.elders.edit', $elder->id) }}"
                                                        class="btn btn-outline-secondary btn-sm">
                                                        <i class="ti-pencil me-1"></i>Edit
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="pagination-info">
                                    <small class="text-muted">
                                        Showing {{ $elders->firstItem() ?? 1 }} to
                                        {{ $elders->lastItem() ?? $elders->count() }}
                                        of {{ $elders->total() ?? $elders->count() }} elders
                                    </small>
                                </div>
                                <div class="pagination-links">
                                    {{ $elders->links() ?? '' }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bulk Actions Bar (Hidden by default) -->
                    <div id="bulkActionsBar" class="card mt-3" style="display: none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span id="selectedCount">0</span> elder(s) selected
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-outline-primary" onclick="bulkExport()">
                                        <i class="ti-download me-1"></i>Export Selected
                                    </button>
                                    <button class="btn btn-outline-success" onclick="bulkAssignCaregiver()">
                                        <i class="ti-user me-1"></i>Assign Caregiver
                                    </button>
                                    <button class="btn btn-outline-warning" onclick="bulkStatusUpdate()">
                                        <i class="ti-reload me-1"></i>Update Status
                                    </button>
                                    <button class="btn btn-outline-danger" onclick="bulkDelete()">
                                        <i class="ti-trash me-1"></i>Delete Selected
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Custom Styles -->
    <style>
        /* Gradient backgrounds */
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        }

        .bg-gradient-success {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%) !important;
        }

        .bg-gradient-warning {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        }

        .bg-gradient-info {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%) !important;
        }

        /* Avatar styling */
        .avatar-circle {
            position: relative;
        }

        .avatar-placeholder {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
            font-size: 18px;
        }

        /* Card enhancements */
        .card {
            border: none !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }

        .elder-card {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .elder-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* Table enhancements */
        .table th {
            background: linear-gradient(145deg, #f8fafc, #e2e8f0);
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            font-size: 0.875rem;
            color: #374151;
        }

        .table td {
            vertical-align: middle;
            padding: 1rem 0.75rem;
            border-bottom: 1px solid #f1f5f9;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        /* Progress bar styling */
        .progress {
            height: 8px;
            background-color: #e2e8f0;
            border-radius: 10px;
        }

        .progress-bar {
            border-radius: 10px;
        }

        /* Badge enhancements */
        .badge {
            font-weight: 500;
            padding: 0.375rem 0.75rem;
            border-radius: 6px;
        }

        /* Button group styling */
        .btn-group .btn {
            border-radius: 4px;
            margin: 0 1px;
        }

        /* Empty state styling */
        .empty-state {
            padding: 3rem 1rem;
        }

        .empty-state i {
            display: block;
            margin: 0 auto;
        }

        /* Bulk actions bar */
        #bulkActionsBar {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            min-width: 600px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: none;
            border-radius: 15px;
        }

        /* Statistics cards */
        .stat-icon {
            opacity: 0.6;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .header-actions {
                flex-direction: column;
                gap: 0.5rem;
            }

            .table-controls {
                flex-direction: column;
                gap: 0.5rem;
            }

            .btn-group .btn {
                margin-bottom: 0.25rem;
            }

            #bulkActionsBar {
                min-width: 95%;
                left: 2.5%;
                transform: none;
            }
        }

        /* Animation for cards */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .elder-card {
            animation: slideInUp 0.3s ease forwards;
        }

        /* Dropdown enhancements */
        .dropdown-menu {
            border: none;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            padding: 0.5rem;
        }

        .dropdown-item {
            border-radius: 6px;
            padding: 0.5rem 1rem;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateX(5px);
        }
    </style>

    <!-- Enhanced JavaScript -->
    <script>
        // Global variables
        let selectedElders = [];
        let currentView = 'table';

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            initializeEventListeners();
            updateBulkActionsVisibility();
        });

        // Initialize all event listeners
        function initializeEventListeners() {
            // Quick search functionality
            document.getElementById('quickSearch').addEventListener('keyup', function() {
                quickSearchElders(this.value);
            });

            // Select all checkbox
            document.getElementById('selectAll').addEventListener('change', function() {
                toggleSelectAll(this.checked);
            });

            // Individual checkboxes
            document.querySelectorAll('.elder-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateSelectedElders();
                });
            });

            // Collapse filter panel
            const filterToggle = document.querySelector('[data-bs-target="#advancedFilters"]');
            if (filterToggle) {
                filterToggle.addEventListener('click', function() {
                    const icon = this.querySelector('i');
                    icon.classList.toggle('ti-angle-down');
                    icon.classList.toggle('ti-angle-up');
                });
            }
        }

        // Quick search functionality
        function quickSearchElders(searchTerm) {
            const rows = document.querySelectorAll('#eldersTable tbody tr');
            const cards = document.querySelectorAll('#cardView .elder-card');

            const items = currentView === 'table' ? rows : cards.map(card => card.closest('.col-md-6'));

            items.forEach(item => {
                if (!item) return;
                const text = item.textContent.toLowerCase();
                const matches = text.includes(searchTerm.toLowerCase());
                item.style.display = matches ? '' : 'none';
            });

            // Update empty state
            const visibleItems = Array.from(items).filter(item => item && item.style.display !== 'none');
            if (visibleItems.length === 0) {
                showEmptySearchState();
            } else {
                hideEmptySearchState();
            }
        }

        // Toggle between table and card view
        function changeView(viewType) {
            const tableView = document.getElementById('tableView');
            const cardView = document.getElementById('cardView');
            const buttons = document.querySelectorAll('[onclick^="changeView"]');

            // Update button states
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            if (viewType === 'card') {
                tableView.style.display = 'none';
                cardView.style.display = 'flex';
                currentView = 'card';
            } else {
                tableView.style.display = 'block';
                cardView.style.display = 'none';
                currentView = 'table';
            }

            // Reapply search filter
            const searchTerm = document.getElementById('quickSearch').value;
            if (searchTerm) {
                quickSearchElders(searchTerm);
            }
        }

        // Select all functionality
        function toggleSelectAll(checked) {
            const checkboxes = document.querySelectorAll('.elder-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = checked;
            });
            updateSelectedElders();
        }

        // Update selected elders array
        function updateSelectedElders() {
            selectedElders = [];
            document.querySelectorAll('.elder-checkbox:checked').forEach(checkbox => {
                selectedElders.push(checkbox.value);
            });

            // Update select all checkbox
            const selectAllCheckbox = document.getElementById('selectAll');
            const totalCheckboxes = document.querySelectorAll('.elder-checkbox').length;

            if (selectedElders.length === 0) {
                selectAllCheckbox.indeterminate = false;
                selectAllCheckbox.checked = false;
            } else if (selectedElders.length === totalCheckboxes) {
                selectAllCheckbox.indeterminate = false;
                selectAllCheckbox.checked = true;
            } else {
                selectAllCheckbox.indeterminate = true;
            }

            updateBulkActionsVisibility();
        }

        // Show/hide bulk actions bar
        function updateBulkActionsVisibility() {
            const bulkActionsBar = document.getElementById('bulkActionsBar');
            const selectedCount = document.getElementById('selectedCount');

            if (selectedElders.length > 0) {
                bulkActionsBar.style.display = 'block';
                selectedCount.textContent = selectedElders.length;
            } else {
                bulkActionsBar.style.display = 'none';
            }
        }

        // Individual elder actions
        function viewElder(elderId) {
            // You can implement a modal or redirect to detail page
            window.location.href = `/admin/elders/${elderId}`;
        }

        function scheduleAppointment(elderId) {
            // You can implement a modal or redirect to appointment scheduling
            window.location.href = `/admin/appointments/create?elder_id=${elderId}`;
        }

        function sendMessage(elderId) {
            // Implement messaging functionality
            alert('Message functionality to be implemented');
        }

        function viewHealthReport(elderId) {
            // Implement health report viewing
            window.location.href = `/admin/elders/${elderId}/health-report`;
        }

        function assignCaregiver(elderId) {
            // Implement caregiver assignment
            window.location.href = `/admin/caregiver/assign?elder_id=${elderId}`;
        }

        function confirmDelete(elderId) {
            if (confirm('Are you sure you want to delete this elder? This action cannot be undone.')) {
                // Create and submit delete form
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/admin/elders/${elderId}`;

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const methodField = document.createElement('input');
                methodField.type = 'hidden';
                methodField.name = '_method';
                methodField.value = 'DELETE';

                const tokenField = document.createElement('input');
                tokenField.type = 'hidden';
                tokenField.name = '_token';
                tokenField.value = csrfToken;

                form.appendChild(methodField);
                form.appendChild(tokenField);
                document.body.appendChild(form);
                form.submit();
            }
        }

        // Bulk actions
        function bulkExport() {
            if (selectedElders.length === 0) {
                alert('Please select elders to export');
                return;
            }

            // Create form to export selected elders
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/admin/elders/bulk-export';

            selectedElders.forEach(elderId => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'elder_ids[]';
                input.value = elderId;
                form.appendChild(input);
            });

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const tokenField = document.createElement('input');
            tokenField.type = 'hidden';
            tokenField.name = '_token';
            tokenField.value = csrfToken;
            form.appendChild(tokenField);

            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);
        }

        function bulkAssignCaregiver() {
            if (selectedElders.length === 0) {
                alert('Please select elders first');
                return;
            }

            // Implement bulk caregiver assignment modal
            const caregiverIds = selectedElders.join(',');
            window.location.href = `/admin/caregiver/bulk-assign?elder_ids=${caregiverIds}`;
        }

        function bulkStatusUpdate() {
            if (selectedElders.length === 0) {
                alert('Please select elders first');
                return;
            }

            const newStatus = prompt('Enter new status (active/inactive):');
            if (newStatus && ['active', 'inactive'].includes(newStatus.toLowerCase())) {
                // Implement bulk status update
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/elders/bulk-status-update';

                selectedElders.forEach(elderId => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'elder_ids[]';
                    input.value = elderId;
                    form.appendChild(input);
                });

                const statusField = document.createElement('input');
                statusField.type = 'hidden';
                statusField.name = 'status';
                statusField.value = newStatus.toLowerCase();
                form.appendChild(statusField);

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const tokenField = document.createElement('input');
                tokenField.type = 'hidden';
                tokenField.name = '_token';
                tokenField.value = csrfToken;
                form.appendChild(tokenField);

                document.body.appendChild(form);
                form.submit();
                document.body.removeChild(form);
            }
        }

        function bulkDelete() {
            if (selectedElders.length === 0) {
                alert('Please select elders first');
                return;
            }

            if (confirm(
                `Are you sure you want to delete ${selectedElders.length} elder(s)? This action cannot be undone.`)) {
                // Implement bulk delete
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/elders/bulk-delete';

                selectedElders.forEach(elderId => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'elder_ids[]';
                    input.value = elderId;
                    form.appendChild(input);
                });

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const tokenField = document.createElement('input');
                tokenField.type = 'hidden';
                tokenField.name = '_token';
                tokenField.value = csrfToken;
                form.appendChild(tokenField);

                document.body.appendChild(form);
                form.submit();
                document.body.removeChild(form);
            }
        }

        // Export functionality
        function exportElders() {
            window.location.href = '/admin/elders/export';
        }

        // Show empty search state
        function showEmptySearchState() {
            // Implement empty search state display
        }

        // Hide empty search state
        function hideEmptySearchState() {
            // Implement hiding empty search state
        }

        // Auto-save search preferences
        function saveSearchPreferences() {
            const searchData = {
                search: document.querySelector('[name="search"]').value,
                status: document.querySelector('[name="status"]').value,
                age_range: document.querySelector('[name="age_range"]').value,
                joined_after: document.querySelector('[name="joined_after"]').value,
                joined_before: document.querySelector('[name="joined_before"]').value
            };
            localStorage.setItem('elder_search_preferences', JSON.stringify(searchData));
        }

        // Load saved search preferences
        function loadSearchPreferences() {
            const saved = localStorage.getItem('elder_search_preferences');
            if (saved) {
                const preferences = JSON.parse(saved);
                Object.keys(preferences).forEach(key => {
                    const field = document.querySelector(`[name="${key}"]`);
                    if (field && preferences[key]) {
                        field.value = preferences[key];
                    }
                });
            }
        }

        // Initialize tooltips (if using Bootstrap)
        if (typeof bootstrap !== 'undefined') {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        }
    </script>
</x-app-layout>
