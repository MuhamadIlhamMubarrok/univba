<nav class="sidebar">
    <div class="sidebar-header">
        <a href="./dashboard">
            <img src="https://kuliahkaryawan.net/assets/images/logok2-shadow.png" width="30" alt="Kuliah Karyawan">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Menu</li>
            <li
                class="nav-item {{ request()->routeIs('daftar.*', 'daftar.detil*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#home" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Pendaftaran</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('daftar.*', 'daftar.detil*') ? 'show' : '' }}"
                    id="home">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="{{ route('daftar') }}"
                                class="nav-link {{ request()->routeIs('daftar.*') ? 'active' : '' }}">Data Pendaftaran</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li
            class="nav-item {{ request()->routeIs('beranda.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('beranda') }}"
                aria-controls="emails">
                <i class="link-icon" data-feather="grid"></i>
                <span class="link-title">Pengaturan Beranda</span>
            </a>
            </li>
        </ul>
    </div>
</nav>
