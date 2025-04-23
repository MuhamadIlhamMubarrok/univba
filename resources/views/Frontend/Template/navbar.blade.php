<nav id="navbar" class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 transparent">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('./images/logo/logo2.png') }}" class="h-12" alt="Flowbite Logo" />
        </a>

        <!-- Mobile Menu Button -->
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#DF8A3C"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Navbar Menu -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-primary md:bg-transparent">
                <!-- Looping Main Menus -->
                @foreach ($mainMenus as $menu)
                    @php
                        // URL untuk menu utama
                        $url = is_numeric($menu->url) ? url('page/' . $menu->url) : url($menu->url);

                        // Ambil semua sub-menu yang terkait dengan menu ini
                        $subItems = $subMenus->where('submenu_id', $menu->menu_id);

                        // Cek apakah menu utama aktif (langsung cocok dengan URL)
                        $isActive = Request::is(trim(parse_url($url, PHP_URL_PATH), '/')) || url()->current() == $url;

                        // Cek apakah ada sub-menu yang sedang aktif
                        foreach ($subItems as $submenu) {
                            $subUrl = is_numeric($submenu->url) ? url('page/' . $submenu->url) : url($submenu->url);
                            if (
                                Request::is(trim(parse_url($subUrl, PHP_URL_PATH), '/')) ||
                                url()->current() == $subUrl
                            ) {
                                $isActive = true; // Jika sub-menu aktif, maka menu utama juga aktif
                                break;
                            }
                        }
                    @endphp
                    <li class="relative">
                        @if ($subItems->isNotEmpty())
                            <!-- Dropdown Button -->
                            <button id="dropdownNavbarLink-{{ $menu->menu_id }}"
                                data-dropdown-toggle="dropdownNavbar-{{ $menu->menu_id }}"
                                class="flex font-poppins items-center justify-between w-full py-2 px-3 rounded-full 
                hover:bg-gradient-to-r from-[#000000] to-[#E5C324] md:hover:bg-transparent 
                md:border-0 md:p-0 md:w-auto text-white  
                {{ $isActive ? 'bg-gradient-to-r from-[#000000] to-[#E5C324] md:px-2 text-white hover:bg-gradient-to-br' : '' }}">
                                {{ $menu->menu }}
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="#DF8A3C" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="dropdownNavbar-{{ $menu->menu_id }}"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-accent dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-white">
                                    @foreach ($subItems as $submenu)
                                        @php
                                            $subUrl = is_numeric($submenu->url)
                                                ? url('page/' . $submenu->url)
                                                : url($submenu->url);
                                            $isSubActive =
                                                Request::is(trim(parse_url($subUrl, PHP_URL_PATH), '/')) ||
                                                url()->current() == $subUrl;
                                        @endphp
                                        <li>
                                            <a href="{{ $subUrl }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-primary dark:hover:text-white font-poppins {{ $isSubActive ? 'bg-gradient-to-r from-[#000000] to-[#E5C324] text-white' : '' }}">
                                                {{ $submenu->menu }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <!-- Menu Without Dropdown -->
                            <a href="{{ $url }}"
                                class="block font-poppins py-2 px-3 text-gray-900 rounded hover:bg-gradient-to-r from-[#000000] to-[#E5C324] md:hover:rounded-full md:border-0  md:p-0 text-white dark:hover:bg-gray-700  md:dark:hover:bg-transparent {{ $isActive ? 'bg-gradient-to-r from-[#000000] to-[#E5C324] hover:bg-gradient-to-br md:px-2 md:rounded-full' : '' }}">
                                {{ $menu->menu }}
                            </a>
                        @endif
                    </li>
                @endforeach

                @php
                    $isContactActive = Request::is('kontak-form');
                @endphp

                <li class="my-3 ml-1 md:my-0 md:pl-[100px]">
                    <a href="/kontak-form"
                        class="font-bold py-2 px-4 rounded-full text-center font-poppins text-white 
        {{ $isContactActive ? 'bg-gradient-to-br from-[#000000] to-[#E5C324]' : 'bg-gradient-to-r from-[#000000] to-[#E5C324] hover:bg-gradient-to-br' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            class="inline-block">
                            <path fill="#ffffff"
                                d="M12 13q1.25 0 2.125-.875T15 10t-.875-2.125T12 7t-2.125.875T9 10t.875 2.125T12 13m-8 7q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm1.75-2h12.5q-1.125-1.4-2.725-2.2T12 15t-3.525.8T5.75 18M5 23q-.425 0-.712-.288T4 22t.288-.712T5 21h14q.425 0 .713.288T20 22t-.288.713T19 23zM5 3q-.425 0-.712-.288T4 2t.288-.712T5 1h14q.425 0 .713.288T20 2t-.288.713T19 3z" />
                        </svg>
                        Contact Us
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- Marquee Section -->
    @if (Request::path() !== '/')
        <div class="w-full h-[40px] py-6 flex items-center bg-gradient-to-r from-[#000000] to-[#E5C324] text-white overflow-hidden"
            data-aos="fade-down">
            <div class="w-full whitespace-nowrap animate-marquee flex items-center">
                <span class="font-poppins mx-4 text-[40px] font-bold uppercase" data-aos="flip-left">Universitas
                    Banten</span>
                <img src="{{ asset('./images/logo/logo1.png') }}" alt="Logo" class="h-[40px] w-auto mx-4"
                    data-aos="flip-left">
                <span class="font-poppins mx-4 text-[40px] font-bold uppercase" data-aos="flip-left">Universitas
                    Banten</span>
                <img src="{{ asset('./images/logo/logo1.png') }}" alt="Logo" class="h-[40px] w-auto mx-4"
                    data-aos="flip-left">
                <span class="font-poppins mx-4 text-[40px] font-bold uppercase" data-aos="flip-left">Universitas
                    Banten</span>
                <img src="{{ asset('./images/logo/logo1.png') }}" alt="Logo" class="h-[40px] w-auto mx-4"
                    data-aos="flip-left">
                <span class="font-poppins mx-4 text-[40px] font-bold uppercase" data-aos="flip-left">Universitas
                    Banten</span>
            </div>
        </div>
    @endif
</nav>
