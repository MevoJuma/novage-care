<x-app-layout>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="page-body">
                <div class="row">
                    <!-- Welcome -->
                    <div class="col-12">
                        <div class="page-header mb-4">
                            <h4>Welcome, {{ Auth::user()->name }}</h4>
                            <span class="text-muted">{{ now()->format('l, F j, Y') }}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Profile summary card -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card dashboard-stat-card">
                            <div class="card-block">
                                <h6 class="m-b-20 text-muted">Profile</h6>
                                <p class="m-b-0">
                                    <span class="fw-bold">{{ Auth::user()->name }}</span><br>
                                    <span class="text-muted">{{ Auth::user()->email }}</span>
                                </p>
                                <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-brand-outline mt-3">Edit Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Caregiver card (if assigned) -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card dashboard-stat-card">
                            <div class="card-block">
                                <h6 class="m-b-20 text-muted">Assigned Caregiver</h6>
                                @if(isset($caregivers) && $caregivers)
                                    <p class="m-b-0">
                                        <span class="fw-bold">{{ $caregivers->name }}</span><br>
                                        <span class="text-muted">{{ $caregivers->phone ?? $caregivers->email ?? 'N/A' }}</span>
                                    </p>
                                @else
                                    <p class="m-b-0 text-muted">No caregiver assigned yet.</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Quick link to blog -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card dashboard-stat-card">
                            <div class="card-block">
                                <h6 class="m-b-20 text-muted">Resources</h6>
                                <p class="m-b-0 text-muted">Read our latest articles and tips.</p>
                                <a href="{{ route('blog') }}" class="btn btn-sm btn-brand mt-3">View Blog</a>
                            </div>
                        </div>
                    </div>
                </div>

                @if(isset($appointments) && $appointments->isNotEmpty())
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Recent Appointments</h5>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Caregiver</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($appointments as $appointment)
                                                <tr>
                                                    <td>{{ $appointment->date }}</td>
                                                    <td>{{ $appointment->time }}</td>
                                                    <td>{{ $appointment->caregiver->name ?? 'Unassigned' }}</td>
                                                    <td>
                                                        <span class="badge bg-{{ $appointment->status === 'completed' ? 'success' : ($appointment->status === 'missed' ? 'danger' : 'warning') }}">
                                                            {{ ucfirst($appointment->status ?? 'N/A') }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <style>
        .dashboard-stat-card {
            background: #fff;
            border-left: 4px solid #066d44;
            border-radius: 4px;
        }
        .btn-brand {
            background: #066d44;
            color: #fff;
            border: none;
            border-radius: 6px;
        }
        .btn-brand:hover { background: #055a38; color: #fff; }
        .btn-brand-outline {
            background: #fff;
            color: #066d44;
            border: 1px solid #066d44;
            border-radius: 6px;
        }
        .btn-brand-outline:hover { background: #f4f9fc; color: #055a38; }
    </style>
</x-app-layout>
