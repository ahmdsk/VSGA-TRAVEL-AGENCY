<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-grid-alt"></i>
                        <span key="t-master">Master Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-tui-location">Data Lokasi</a></li>
                        <li><a href="#" key="t-tui-destination">Data Destinasi</a></li>
                        <li><a href="#" key="t-tui-visitor">Data Pengunjung</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-map"></i>
                        <span key="t-location">Data Lokasi</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bxs-tree"></i>
                        <span key="t-destinations">Data Destinasi</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-visitor">Data Pengunjung</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-bed"></i>
                        <span key="t-orders">Data Pesanan</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-user-check"></i>
                        <span key="t-admin">Data Admin</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->