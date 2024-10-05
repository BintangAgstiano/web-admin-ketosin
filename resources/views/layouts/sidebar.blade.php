<aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('main-assets/imgs/dark-logo.png') }}" alt="AdminLTE Logo" class="brand-image p-2"
            style="opacity: .8;scale:2 !important;margin-top: 3px">
        <span class="brand-text font-weight-light"><img src="{{ asset('main-assets/imgs/text-logo.png') }}" style="margin-top: 3px" width="100" alt=""></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
       

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header ">Beranda</li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard', 'dashboard/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-dashboard-line"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="/qr-code" class="nav-link {{ Request::is('qr-code', 'qr-code/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-qr-code-line"></i>
                        <p>
                            QR Code
                        </p>
                    </a>
                </li> --}}
                <li class="nav-header">Voting</li>
                <li class="nav-item">
                    <a href="/kandidat" class="nav-link {{ Request::is('kandidat', 'kandidat/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-user-2-line"></i>
                        <p>
                            Kandidat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pemilihan" class="nav-link {{ Request::is('pemilihan', 'pemilihan/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-signal-tower-line"></i>
                        <p>
                            Pemilihan
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="/token-tps" class="nav-link {{ Request::is('token-tps', 'token-tps/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-nft-line"></i>
                        <p>
                            Token TPS
                        </p>
                    </a>
                </li> --}}
                <li class="nav-header">Pengguna</li>
                <li class="nav-item">
                    <a href="/peserta" class="nav-link {{ Request::is('peserta', 'peserta/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-user-6-line"></i>
                        <p>
                            Peserta
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelas" class="nav-link {{ Request::is('kelas', 'kelas/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-bank-line"></i>
                        <p>
                            Kelas
                        </p>
                    </a>
                </li>
                <li class="nav-header">Pengaturan</li>
                <li class="nav-item">
                    <a href="/batas-waktu"
                        class="nav-link {{ Request::is('batas-waktu', 'batas-waktu/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-time-line"></i>
                        <p>
                            Batas Waktu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link {{ Request::is('logout', 'logout/*') ? 'active' : '' }}">
                        <i class="nav-icon ri-logout-box-line"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
