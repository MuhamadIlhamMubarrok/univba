<style>
    :root {
        --purple-1: #a99f9f;
        --purple-2: #da4d4d;
        --white: #fff;
        --black: #221f1f;
        --red: #b62327;
        --lightgray: #cfcfcf;
        --overlay: rgba(0, 0, 0, 0.5);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
    }


    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
    }


    html {
        font-size: 62.5%;
    }

    button {
        background: transparent;
        border: none;
        cursor: pointer;
    }

    ul {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    a,
    button {
        color: inherit;
    }

    .no-transition {
        transition: none !important;
    }


    /* HEADER
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .page-header {
        position: relative;
        padding: 1.5rem 3rem;
        background: #f3f3f3;
        box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
    }

    .page-header nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .page-header .horizontal-logo,
    .page-header .search span {
        display: none;
    }

    .page-header .vertical-logo {
        max-width: 18.5rem;
    }

    .page-header .top-menu-wrapper {
        color: var(--black);
    }

    .page-header .top-menu-wrapper::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        transition: background 0.5s;
    }

    .page-header .search {
        color: var(--white);
    }

    .page-header .panel,
    .page-header .top-menu {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 2;
        transform: translate3d(-100%, 0, 0);
        transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .page-header .panel1 {
        width: 100%;
        background: var(--purple-1);
        transition-delay: 0.3s;
    }

    .page-header .panel2 {
        width: calc(100% - 3rem);
        background: var(--red);
        transition-delay: 0.1s;
    }

    .page-header .top-menu {
        display: flex;
        flex-direction: column;
        width: calc(100% - 6rem);
        overflow-y: auto;
        padding: 2rem;
        background: var(--white);
    }

    .page-header .top-menu-wrapper.show-offcanvas::before {
        background: var(--overlay);
        z-index: 1;
    }

    .page-header .top-menu-wrapper.show-offcanvas .panel,
    .page-header .top-menu-wrapper.show-offcanvas .top-menu {
        transform: translate3d(0, 0, 0);
        transition-duration: 0.7s;
    }

    .page-header .top-menu-wrapper.show-offcanvas .panel1 {
        transition-delay: 0s;
    }

    .page-header .top-menu-wrapper.show-offcanvas .panel2 {
        transition-delay: 0.2s;
    }

    .page-header .top-menu-wrapper.show-offcanvas .top-menu {
        transition-delay: 0.4s;
        box-shadow: rgba(0, 0, 0, 0.25) 0 0 4rem 0.5rem;
    }

    /* FORM
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .page-header .search-form {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        visibility: hidden;
        opacity: 0;
        padding: 1rem 0;
        background: var(--purple-2);
        transition: all 0.2s;
    }

    .page-header .search-form.is-visible {
        visibility: visible;
        opacity: 1;
    }

    .page-header .search-form div {
        position: relative;
        width: 90%;
        max-width: 1000px;
        margin: 0 auto;
    }

    .page-header .search-form input {
        width: 100%;
        font-size: 2rem;
        height: 4rem;
        padding: 0 2rem;
    }

    .page-header .search-form button {
        position: absolute;
        right: 2rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--purple-1);
    }

    /* TOP MENU
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .page-header .top-menu li+li {
        margin-top: 1.5rem;
    }

    .page-header .top-menu>li:last-child {
        margin-top: auto;
    }

    .page-header ul a {
        font-family: 'Poppins', sans-serif;
        display: inline-block;
        font-size: 1.3rem;
        text-transform: uppercase;
        transition: color 0.35s ease-out;
    }

    .page-header ul a:hover {
        color: var(--red);
    }

    .page-header .has-dropdown i {
        display: none;
    }

    .page-header .sub-menu {
        padding: 1.5rem 2rem 0;
    }

    .page-header .top-menu .mob-block {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 3rem;
    }

    .page-header .top-menu .mob-block i {
        color: var(--lightgray);
    }

    .page-header .socials {
        display: flex;
        margin-top: 3rem;

        margin-bottom: 1rem;
    }

    .page-header .socials li+li {
        margin-top: 0;
    }

    .page-header .socials .fa-stack {
        font-size: 1.7rem;
    }

    .page-header .socials .fab {
        font-size: 1.2rem;
    }

    /* MQ
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    @media screen and (min-width: 550px) {
        .page-header .panel1 {
            width: 60%;
        }

        .page-header .panel2 {
            width: calc(60% - 3rem);
        }

        .page-header .top-menu {
            width: calc(60% - 6rem);
        }
    }

    @media screen and (min-width: 768px) {
        .page-header .top-menu {
            padding: 4rem;
        }

        .page-header ul a {
            font-size: 1.6rem;
        }

        .page-header .search-form input {
            font-size: 2.4rem;
            height: 5rem;
            line-height: 5rem;
        }
    }

    @media screen and (min-width: 995px) {
        .page-header {
            border-radius: 15px;
            padding: 0 10rem;
        }

        .page-header .panel,
        .page-header .open-mobile-menu,
        .page-header .vertical-logo,
        .page-header .top-menu .mob-block,
        .page-header .top-menu>li:last-child,
        .page-header .top-menu-wrapper::before {
            display: none;
        }

        .page-header .horizontal-logo {
            display: block;
        }

        .page-header .top-menu-wrapper {
            margin-top: 20px;
            display: flex;
            align-items: center;
            color: var(--white);
        }

        .page-header .top-menu {
            flex-direction: row;
            position: static;
            width: auto;
            background: transparent;
            transform: none;
            padding: 0;
            overflow-y: visible;
            box-shadow: none !important;
        }

        .page-header .top-menu li+li {
            margin-top: 0;
        }

        .page-header .top-menu>li:not(:nth-last-child(2)) {
            margin-right: 3rem;
        }

        .page-header .top-menu>li>a {
            padding: 3rem 0.5rem;
        }

        .page-header ul a {
            font-size: 1.5rem;
        }

        .page-header .has-dropdown i {
            display: inline-block;
        }

        .page-header .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            padding: 1.5rem 2rem;
            background: var(--purple-2);
        }

        .page-header .sub-menu li+li {
            margin-top: 1.2rem;
        }

        .page-header .sub-menu a {
            padding: 0.5rem 1rem;
            white-space: nowrap;
        }

        .page-header .has-dropdown {
            position: relative;
        }

        .page-header .has-dropdown:hover .sub-menu {
            display: block;
        }

        .page-header .search {
            display: flex;
            align-items: center;
            margin-left: 3rem;
        }
    }

    @media screen and (min-width: 1200px) {
        .page-header .search {
            margin-left: 5rem;
        }

        .page-header .search i {
            margin-right: 1.5rem;
        }

        .page-header .search span {
            display: block;
            font-weight: 500;
            font-size: 1.6rem;
        }
    }
</style>

<header class="page-header" style="margin: 10px 20px 10px;">
    <nav>
        <button aria-label="Open Mobile Menu" class="open-mobile-menu fa-lg">
            <i class="fas fa-bars" aria-hidden="true"></i>
        </button>
        <a href="/">
            <img class="logo horizontal-logo" style="width: 200px; margin-top: 5px;" src="/images/logo/header-azzuhra.png"
                alt="Institut Az Zuhra Kuliah Karyawan">
            <img class="logo vertical-logo" style="width: 250px;" src="/images/logo/header-azzuhra.png"
                alt="Institut Az Zuhra Kuliah Karyawan">
        </a>
        <div class="top-menu-wrapper">
            <ul class="top-menu">
                @foreach ($mainMenus as $menu)
                    <li class="has-dropdown" style="font-weight: bold;">
                        @php
                            // Determine the URL: if numeric, assume it's a page_id and construct "page/{page_id}", otherwise use the actual URL
$url = is_numeric($menu->url) ? url('page/' . $menu->url) : url($menu->url);
$subItems = $subMenus->where('submenu_id', $menu->menu_id);
                        @endphp
                        <a style="color: #000;" href="{{ $url }}">
                            {{ $menu->menu }}
                            @if ($subItems->isNotEmpty())
                                <i class="fas fa-chevron-down" style="margin-left: 5px;"></i>
                            @endif
                        </a>
                        @if ($subItems->isNotEmpty())
                            <ul class="dropdown-menu">
                                @foreach ($subItems as $submenu)
                                    @php
                                        // Apply the same logic for submenu URLs
                                        $subUrl = is_numeric($submenu->url)
                                            ? url('page/' . $submenu->url)
                                            : url($submenu->url);
                                    @endphp
                                    <li style="font-weight: bold;">
                                        <a href="{{ $subUrl }}">{{ $submenu->menu }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                <li></li>
            </ul>
        </div>
    </nav>
</header>


<script>
    // JavaScript to show/hide dropdown on hover
    document.querySelectorAll('.has-dropdown').forEach(function(menuItem) {
        menuItem.addEventListener('mouseenter', function() {
            const dropdown = menuItem.querySelector('.dropdown-menu');
            if (dropdown) dropdown.style.display = 'block';
        });
        menuItem.addEventListener('mouseleave', function() {
            const dropdown = menuItem.querySelector('.dropdown-menu');
            if (dropdown) dropdown.style.display = 'none';
        });
    });
</script>

<script>
    // JavaScript to show/hide dropdown on hover
    document.querySelectorAll('.has-dropdown').forEach(function(menuItem) {
        menuItem.addEventListener('mouseenter', function() {
            const dropdown = menuItem.querySelector('.dropdown-menu');
            if (dropdown) dropdown.style.display = 'block';
        });
        menuItem.addEventListener('mouseleave', function() {
            const dropdown = menuItem.querySelector('.dropdown-menu');
            if (dropdown) dropdown.style.display = 'none';
        });
    });
</script>

<script>
    const pageHeader = document.querySelector(".page-header");
    const openMobMenu = document.querySelector(".open-mobile-menu");
    const closeMobMenu = document.querySelector(".close-mobile-menu");
    const toggleSearchForm = document.querySelector(".search");
    const searchForm = document.querySelector(".page-header form");
    const topMenuWrapper = document.querySelector(".top-menu-wrapper");
    const isVisible = "is-visible";
    const showOffCanvas = "show-offcanvas";
    const noTransition = "no-transition";
    let resize;

    openMobMenu.addEventListener("click", () => {
        topMenuWrapper.classList.add(showOffCanvas);
    });

    closeMobMenu.addEventListener("click", () => {
        topMenuWrapper.classList.remove(showOffCanvas);
    });

    // toggleSearchForm.addEventListener("click", () => {
    //   searchForm.classList.toggle(isVisible);
    // });

    window.addEventListener("resize", () => {
        pageHeader.querySelectorAll("*").forEach(function(el) {
            el.classList.add(noTransition);
        });
        clearTimeout(resize);
        resize = setTimeout(resizingComplete, 500);
    });

    function resizingComplete() {
        pageHeader.querySelectorAll("*").forEach(function(el) {
            el.classList.remove(noTransition);
        });
    }
</script>
