<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('images/logo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Koperasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline mt-2">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Data Pengguna -->
                <li class="nav-header">Data Pengguna</li>
                <li class="nav-item">
                    <a href="{{ url('/users') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Manajemen Pengguna</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/members') }}" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>Data Member</p>
                    </a>
                </li>

                <!-- Data Transaksi -->
                <li class="nav-header">Data Transaksi</li>

                <!-- Peminjaman (Dropdown) -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Peminjaman
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/pinjaman') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pinjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/angsuran') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Angsuran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/perjanjian') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Perjanjian Pinjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/laporans') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Pinjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/laporanA') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Angsuran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Tambahan Menu Logout -->
                <li class="nav-header">Akun</li>
                <li class="nav-item">
                    <a href="{{ url('/logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>