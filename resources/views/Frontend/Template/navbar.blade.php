<nav id="navbar" class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 transparent">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('./images/logo/logo2.png') }}" class="h-8" alt="Flowbite Logo" />
        </a>

        <!-- Mobile Menu Button -->
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
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
                        // URL for the current menu item
                        $url = is_numeric($menu->url) ? url('page/' . $menu->url) : url($menu->url);
                        // Check if the current URL matches the menu URL
                        $isActive = Request::is(trim(parse_url($url, PHP_URL_PATH), '/')) || url()->current() == $url;
                        $subItems = $subMenus->where('submenu_id', $menu->menu_id);
                    @endphp
                    <li class="relative">
                        @if ($subItems->isNotEmpty())
                            <!-- Dropdown Button -->
                            <button id="dropdownNavbarLink-{{ $menu->menu_id }}"
                                data-dropdown-toggle="dropdownNavbar-{{ $menu->menu_id }}"
                                class="flex font-poppins items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-accent md:p-0 md:w-auto text-white  dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent {{ $isActive ? 'text-accent' : '' }}">
                                {{ $menu->menu }}
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="dropdownNavbar-{{ $menu->menu_id }}"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-[#F9F51A] dark:divide-gray-600">
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
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-primary dark:hover:text-white font-poppins {{ $isSubActive ? 'bg-primary text-white' : '' }}">
                                                {{ $submenu->menu }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <!-- Menu Without Dropdown -->
                            <a href="{{ $url }}"
                                class="block font-poppins py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 text-white hover:text-[#F9F51A] dark:hover:bg-gray-700  md:dark:hover:bg-transparent {{ $isActive ? 'bg-[#F9F51A] md:px-2 md:rounded-full text-primary' : '' }}">
                                {{ $menu->menu }}
                            </a>
                        @endif
                    </li>
                @endforeach

                <li class="my-3 ml-1 md:my-0 md:pl-[100px]">
                    <a href="/kontak-form"
                        class="bg-[#F9F51A] hover:bg-accent text-white font-bold py-2 px-4 rounded-full text-center font-poppins">
                        Contact Us
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- Marquee Section -->
    @if (Request::path() !== '/')
        <div class="w-full h-[40px] py-6 flex items-center bg-accent text-white overflow-hidden" data-aos="fade-down">
            <div class="w-full whitespace-nowrap animate-marquee flex items-center">
                <span class="font-poppins mx-4 text-[40px] font-bold" data-aos="flip-left">Universitas Kepanjen</span>
                <img src="{{ asset('./images/logo/logo1.png') }}" alt="Logo" class="h-[40px] w-auto mx-4"
                    data-aos="flip-left">
                <span class="font-poppins mx-4 text-[40px] font-bold" data-aos="flip-left">Universitas Kepanjen</span>
                <img src="{{ asset('./images/logo/logo1.png') }}" alt="Logo" class="h-[40px] w-auto mx-4"
                    data-aos="flip-left">
                <span class="font-poppins mx-4 text-[40px] font-bold" data-aos="flip-left">Universitas Kepanjen</span>
                <img src="{{ asset('./images/logo/logo1.png') }}" alt="Logo" class="h-[40px] w-auto mx-4"
                    data-aos="flip-left">
                <span class="font-poppins mx-4 text-[40px] font-bold" data-aos="flip-left">Universitas Kepanjen</span>
            </div>
        </div>
    @endif
</nav>
