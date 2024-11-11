<nav class="sidebar">
    <div class="sidebar-header">

        <a href="./dashboard">

        <a href="/" class="d-flex justify-content-center align-items-center">
            <img src="https://kuliahkaryawan.net/assets/images/logok2-shadow.png" width="30" alt="Kuliah Karyawan">
            <h5 class="mx-2">x</h5>
            <img src="{{ $user->logo ? asset('storage/userImage/' . $user->logo) : 'https://kuliahkaryawan.net/assets/images/logok2-shadow.png' }}"
                width="30" alt="Kuliah Karyawan">
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
            class="nav-item {{ request()->routeIs('daftar.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('daftar') }}"
                aria-controls="emails">
                <i class="link-icon" data-feather="grid"></i>
                <span class="link-title">Data Pendaftaran</span>
            </a>
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
