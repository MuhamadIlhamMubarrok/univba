<nav class="sidebar">
    <div class="sidebar-header">
        <a href="/">
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
            <li class="nav-item nav-category">Halaman</li>
            {{-- <li
                class="nav-item {{ request()->routeIs('admin.certificate.*', 'admin.client.*', 'admin.projek.*', 'admin.count.*', 'admin.skill.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#home" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Self Maintenance</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.client.*', 'admin.projek.*', 'admin.count.*', 'admin.certificate.*', 'admin.skill.*', 'admin.member.*', 'admin.news.*') ? 'show' : '' }}"
                    id="home">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="{{ route('admin.client.index') }}"
                                class="nav-link {{ request()->routeIs('admin.client.*') ? 'active' : '' }}">Client</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.projek.index') }}"
                                class="nav-link {{ request()->routeIs('admin.projek.*') ? 'active' : '' }}">Project</a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('admin.count.index') }}"
                                class="nav-link {{ request()->routeIs('admin.count.*') ? 'active' : '' }}">Count</a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('admin.certificate.index') }}"
                                class="nav-link {{ request()->routeIs('admin.certificate.*') ? 'active' : '' }}">Certificate</a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('admin.skill.index') }}"
                                class="nav-link {{ request()->routeIs('admin.skill.*') ? 'active' : '' }}">Skill</a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('admin.member.index') }}"
                                class="nav-link {{ request()->routeIs('admin.member.*') ? 'active' : '' }}">Member</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.news.index') }}"
                                class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">news</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
        </ul>
    </div>
</nav>
