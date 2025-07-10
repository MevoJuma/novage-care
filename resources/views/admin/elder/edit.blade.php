<x-app-layout>
        <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">

            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                    <a href="">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>

            </ul>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Elders Management</div>
            {{-- <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Forms &amp; Tables</div> --}}
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="{{ route('admin.elders.index') }}">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>EM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">View Elders</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="bs-basic-table.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>EM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Register New Elder</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="form-components.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>EM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Elder Health Reports</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Caregivers</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="form-elements-component.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>UM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Caregivers</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="bs-basic-table.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>UM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Assign Caregivers</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="form-components.html">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>UM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Performance Metrics</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Appointments</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="form-elements-component.html">
                        <span class="pcoded-micon"><i class="ti-settings"></i><b>S</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Upcoming Appointments</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="bs-basic-table.html">
                        <span class="pcoded-micon"><i class="ti-user"></i><b>UM</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Appointment History</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="form-components.html">
                        <span class="pcoded-micon"><i class="ti-help"></i><b>H</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Schedue New</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Edit Elder</h4>
                        <a href="{{ route('admin.elders.index') }}" class="btn btn-secondary">← Back to List</a>
                    </div>
                </div>

                <div class="page-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.elders.update', $elder->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" name="full_name" id="full_name"
                                           value="{{ old('full_name', $elder->full_name) }}"
                                           class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" name="age" id="age"
                                           value="{{ old('age', $elder->age) }}"
                                           class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="active" {{ $elder->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $elder->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="d-flex gap-2 mt-4">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-check-circle"></i> Update Elder
                                    </button>
                                    <a href="{{ route('admin.elders.index') }}" class="btn btn-outline-secondary">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.page-body -->

            </div>
        </div>
    </div>
</div>

</x-app-layout>
