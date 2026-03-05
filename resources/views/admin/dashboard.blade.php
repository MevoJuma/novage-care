<x-app-layout>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="page-body">
                <div class="row">
                    <!-- Stats -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card dashboard-stat-card">
                            <div class="card-block">
                                <h6 class="m-b-20 text-muted">Total Elders</h6>
                                <h2 class="text-right">
                                    <i class="ti-user f-left dashboard-stat-icon"></i>
                                    <span>{{ $totalElders }}</span>
                                </h2>
                                <p class="m-b-0 text-muted">Active registrations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card dashboard-stat-card">
                            <div class="card-block">
                                <h6 class="m-b-20 text-muted">Caregivers</h6>
                                <h2 class="text-right">
                                    <i class="ti-id-badge f-left dashboard-stat-icon"></i>
                                    <span>{{ $totalCaregivers }}</span>
                                </h2>
                                <p class="m-b-0 text-muted">Available staff</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <!-- Recent Elders -->
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>Recent Elders</h5>
                                <div class="card-header-right">
                                    <a href="{{ route('admin.elders.index') }}" class="btn btn-sm btn-brand">View All</a>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($recentElders as $elder)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                          
                                                            <span class="ms-2">{{ $elder->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{ $elder->email }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.elders.show', $elder->id) }}" class="btn btn-sm btn-brand-outline">
                                                            <i class="ti-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">No recent elders found.</td>
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
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Quick Actions</h5>
                            </div>
                            <div class="card-block p-4 dashboard-quick-actions d-flex flex-column gap-2">
                                <a href="{{ route('admin.elders.create') }}" class="btn btn-sm btn-brand d-flex align-items-center justify-content-center">
                                    <i class="ti-plus me-2"></i> Add New Elder
                                </a>
                                <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-brand d-flex align-items-center justify-content-center">
                                    <i class="ti-pencil-alt me-2"></i> Create Blog Post
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .dashboard-stat-card {
        background: #fff;
        border-left: 4px solid #066d44;
        border-radius: 4px;
    }
    .dashboard-stat-card .card-block h2 { color: #2c3e50; }
    .dashboard-stat-icon { color: #066d44; }
    .dashboard-quick-actions { background: #f4f9fc; }
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
    .dashboard-stat-card .card-block .text-muted { color: #6c757d !important; }
</style>
