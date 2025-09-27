<x-app-layout>

    <nav class="pcoded-navbar">
        <!-- ...existing sidebar code... -->
    </nav>

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page Header -->
                    <div class="page-header mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Welcome, {{ Auth::user()->name }}</h4>
                                <span class="text-muted text-sm">{{ now()->format('l, F j, Y') }}</span>
                            </div>
                            <div>
                                {{-- <a href="{{ route('elder.profile') }}" class="btn btn-outline-primary btn-sm">View
                                    Profile</a> --}}
                                <a href="" class="btn btn-outline-primary btn-sm">View
                                    Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <h6 class="text-muted">Next Appointment</h6>
                                    {{-- @if ($appointments->isNotEmpty())
                                        <div class="mt-2">
                                            <span class="fw-bold">{{ $appointments->first()->date }} @
                                                {{ $appointments->first()->time }}</span><br>
                                            <span class="text-muted">With:
                                                {{ $appointments->first()->caregiver->name ?? 'Unassigned' }}</span>
                                            <br><span class="text-muted">Location:
                                                {{ $appointments->first()->location ?? 'N/A' }}</span>
                                        </div>
                                    @else
                                        <p class="text-sm text-gray-500 mt-2">No upcoming appointments</p>
                                    @endif
                                    <a href="{{ route('elder.appointments') }}" class="btn btn-link btn-sm mt-2">View
                                        All</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <h6 class="text-muted">Total Appointments</h6>
                                    {{-- <span class="fw-bold display-6">{{ $appointments->count() }}</span> --}}
                                    {{-- <a href="{{ route('elder.appointments') }}" --}}
                                        class="btn btn-link btn-sm mt-2">History</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <h6 class="text-muted">Wellness Check-in</h6>
                                    <span class="fw-bold">{{ $wellnessToday ?? 'Not submitted' }}</span>
                                    {{-- <a href="{{ route('elder.wellness.checkin') }}" --}}
                                        class="btn btn-success btn-sm mt-2">Check-in Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <h6 class="text-muted">Health Alerts</h6>
                                    {{-- @if (!empty($healthAlerts))
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($healthAlerts as $alert)
                                                <li class="text-danger small">{{ $alert }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <span class="text-success">No alerts</span>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Caregiver Info & Profile Summary -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card shadow-sm">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Assigned Caregiver</h6>
                                </div>
                                <div class="card-body">
                                    @if ($caregivers)
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $caregivers->avatar ?? '/assets/images/user-avatar.png' }}"
                                                alt="Avatar" class="rounded-circle me-3" width="50"
                                                height="50">
                                            <div>
                                                <span class="fw-bold">{{ $caregivers->name }}</span><br>
                                                <span class="text-muted">{{ $caregivers->phone ?? 'N/A' }}</span><br>
                                                <span class="text-muted">{{ $caregivers->email ?? 'N/A' }}</span>
                                            </div>
                                        </div>
                                        {{-- <a href="{{ route('elder.caregiver.contact') }}" --}}
                                            class="btn btn-outline-primary btn-sm mt-3">Contact Caregiver</a>
                                    @else
                                        <span class="text-muted">No caregiver assigned.</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Profile Summary</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <img src="{{ Auth::user()->avatar ?? '/assets/images/user-avatar.png' }}"
                                            alt="Avatar" class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <span class="fw-bold">{{ Auth::user()->name }}</span><br>
                                            <span class="text-muted">Age: {{ Auth::user()->age ?? 'N/A' }}</span><br>
                                            <span class="text-muted">Care Plan:
                                                {{ Auth::user()->care_plan ?? 'Basic' }}</span>
                                        </div>
                                    </div>
                                    <span class="text-muted">Email: {{ Auth::user()->email }}</span><br>
                                    <span class="text-muted">Phone: {{ Auth::user()->phone ?? 'N/A' }}</span>
                                    <a href="{{ route('elder.profile.edit') }}"
                                        class="btn btn-outline-secondary btn-sm mt-3">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Appointment History -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h6 class="mb-0">Recent Appointments</h6>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Caregiver</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($appointments as $appointment)
                                            <tr>
                                                <td>{{ $appointment->date }}</td>
                                                <td>{{ $appointment->time }}</td>
                                                <td>{{ $appointment->caregiver->name ?? 'Unassigned' }}</td>
                                                <td>
                                                    <span
                                                        class="badge bg-{{ $appointment->status == 'completed' ? 'success' : ($appointment->status == 'missed' ? 'danger' : 'warning') }}">
                                                        {{ ucfirst($appointment->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('elder.appointment.details', $appointment->id) }}"
                                                        class="btn btn-sm btn-info">Details</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No appointments found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Messages/Notifications -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h6 class="mb-0">Messages & Notifications</h6>
                        </div>
                        <div class="card-body">
                            @if (!empty($messages))
                                <ul class="list-unstyled mb-0">
                                    @foreach ($messages as $msg)
                                        <li class="mb-2"><span class="fw-bold">{{ $msg['from'] }}:</span>
                                            {{ $msg['text'] }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted">No new messages.</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
