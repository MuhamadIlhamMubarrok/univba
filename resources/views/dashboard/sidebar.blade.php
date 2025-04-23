<nav class="sidebar">
    <div class="sidebar-header">

        <a href="./dashboard">

            <a href="/" class="d-flex justify-content-center align-items-center">
                <img src="https://kuliahkaryawan.net/assets/images/logok2-shadow.png" width="30" alt="Kuliah Karyawan">
                <h5 class="mx-2">x</h5>
                <img src="{{ Auth::user()->logo ? asset('storage/userImage/' . Auth::user()->logo) : 'https://kuliahkaryawan.net/assets/images/logok2-shadow.png' }}"
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
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}" aria-controls="emails">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('daftar', 'daftar.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('daftar') }}" aria-controls="emails">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span class="link-title">Data Pendaftaran</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('menu', 'menu.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('menu') }}" aria-controls="emails">
                    <i class="fa fa-minus-square" aria-hidden="true"></i>
                    <span class="link-title">Pengaturan Menu</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('pages', 'pages.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pages') }}" aria-controls="emails">
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                    <span class="link-title">Pengaturan Halaman</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('kontak.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kontak.index') }}" aria-controls="emails">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <span class="link-title">Pengaturan Kontak</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('gallery.index') }}" aria-controls="emails">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    <span class="link-title">Pengaturan Galeri Foto</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}" aria-controls="emails">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <span class="link-title">Pengaturan Admin</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('berita', 'berita.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('berita') }}" aria-controls="emails">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span class="link-title">Berita Terkini</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
