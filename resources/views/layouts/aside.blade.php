<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        @if(Auth::check() && Auth::user()->role === 'elder')
            {{-- Elder sidebar --}}
            <div class="pcoded-navigatio-lavel">Main</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->routeIs('elder.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('elder.dashboard') }}">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        
        @else
            {{-- Admin sidebar --}}
            <div class="pcoded-navigatio-lavel">Main</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="{{ route('admin.elders.index') }}">
                        <span class="pcoded-micon"><i class="ti-user"></i><b>E</b></span>
                        <span class="pcoded-mtext">All Elders</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="{{ route('admin.posts.index') }}">
                        <span class="pcoded-micon"><i class="ti-files"></i><b>P</b></span>
                        <span class="pcoded-mtext">Post</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        @endif

        {{-- Logout (shared) --}}
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
