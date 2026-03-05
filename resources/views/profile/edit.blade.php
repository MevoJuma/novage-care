<x-app-layout>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="page-body">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header mb-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <div>
                                <h4 class="mb-1">Profile</h4>
                                <span class="text-muted">Manage your account settings</span>
                            </div>
                            <div>
                                @if(Auth::check() && Auth::user()->role === 'elder')
                                    <a href="{{ route('elder.dashboard') }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="ti-arrow-left"></i> Back to Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="ti-arrow-left"></i> Back to Dashboard
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="ti-user me-2"></i>Profile Information</h5>
                            </div>
                            <div class="card-block">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="ti-lock me-2"></i>Update Password</h5>
                            </div>
                            <div class="card-block">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
                    </div>
                </div>

            
            </div>
        </div>
    </div>

    <style>
        .btn-brand { background: #066d44; color: #fff; border: none; border-radius: 6px; }
        .btn-brand:hover { background: #055a38; color: #fff; }
    </style>
</x-app-layout>
