

<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <!-- Logo Section -->
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            <a href="{{ route('admin.dashboard') }}">
                <img class="img-fluid" style="max-height: 45px" src="{{ asset('images/logo.png') }}" alt="Novage Care Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>

        <!--Topbar Items-->
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle">
                        <a href="javascript:void(0)"><i class="ti-menu"></i></a>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>
            </ul>

            <ul class="nav-right">
                <!-- Notifications -->
                <li class="header-notification">
                    <a href="#!">
                        <i class="ti-bell"></i>
                        <span class="badge bg-c-pink">3</span>
                    </a>
                    <ul class="show-notification">
                        <li>
                            <h6>Notifications</h6>
                            <label class="label label-danger">New</label>
                        </li>
                        <li>
                            <div class="media">
                                <img class="d-flex align-self-center img-radius" src="{{ asset('assets/images/user.png') }}" alt="user">
                                <div class="media-body">
                                    <h5 class="notification-user">System Alert</h5>
                                    <p class="notification-msg">Caregiver assignment due today.</p>
                                    <span class="notification-time">5 minutes ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Profile Dropdown -->
                <li class="user-profile header-notification">
                    <a href="#!">
                        <img src="{{ asset('assets/images/avatar-4.jpg') }}" class="img-radius"
                            alt="User-Profile-Image">
                        <span>{{ Auth::user()->name }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <i class="ti-user"></i> Profile
                            </a>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" style="background: none; border: none; padding: 0; margin: 0; color: inherit; font: inherit; cursor: pointer;">
                                    <i class="ti-layout-sidebar-left"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
