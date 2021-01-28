<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/" title="SiRT">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name text-truncate">Cari Laptop</span>
            </a>
        </div>
        <div class="sidebar-scrollbar">
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li>
                    <h6 class="px-4 py-2">Menu</h6>
                </li>
                <li class="has-sub {{ Request::is('admin') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{url('admin')}}">
                        <!-- <i class="mdi mdi-account-box-multiple"></i> -->
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="has-sub {{ Request::is('package') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{url('package')}}">
                        <!-- <i class="mdi mdi-archive"></i> -->
                        <span class="nav-text">Alternatif</span>
                    </a>
                </li>
                <li class="has-sub {{ Request::is('order') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{url('order')}}">
                        <!-- <i class="mdi mdi-account-supervisor-circle"></i> -->
                        <span class="nav-text">Kriteria</span>
                    </a>
                </li>
                <li class="has-sub {{ Request::is('kritik') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{url('kritik')}}">
                        <!-- <i class="mdi mdi-email-outline"></i> -->
                        <span class="nav-text">Sub Kriteria</span>
                    </a>
                </li>
                <li class="has-sub {{ Request::is('user') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{url('user')}}">
                        <!-- <i class="mdi mdi-email-plus-outline"></i> -->
                        <span class="nav-text">Normalisasi</span>
                    </a>
                </li>
                <!-- <li class="has-sub ">
                    <a class="sidenav-item-link" href="{{url('/')}}">
                        <i class="mdi mdi-message-alert-outline"></i>
                        <span class="nav-text">Kunjungi halaman</span>
                    </a>
                </li> -->
                <li class="has-sub ">

                <a class="sidenav-item-link" href="{{route('logout')}}">
                        <!-- <i class="mdi"></i> -->
                        <span class="nav-text">Logout</span>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</aside>
