<nav id="header" class="fixed w-full text-white py-4 z-10">
    <div id="top"
        class="relative fixed z-20 top-0 w-full container mx-auto flex flex-wrap items-center justify-between">

        <div class="pl-4 flex-grow items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-black text-2xl lg:text-3xl"
                href="/homepage"> SEVENSTAR
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center px-3 py-2 border rounded text-white border-white appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    <title>Menu</title>
                </svg>
            </button>
        </div>

        <div class="flex-grow lg:flex items-center lg:block lg:bg-transparent bg-gray-900 lg:w-auto text-white hidden pt-6 lg:pt-0 w-full lg:h-auto h-screen z-20 mt-2 lg:mt-0"
            id="main_menu">
            <ul class="lg:flex font-bold text-2xl lg:text-lg list-reset lg:justify-end flex-1 text-center my-auto"
                id="menu_nav">
                <li class="relative py-2 group lg:mb-1 mb-2 cursor-pointer" id="button_home">
                    <a class="whitespace-no-wrap no-underline hover:text-white hover:underline p-2" href="/">
                        <span class="last">Home</span>
                    </a>
                </li>

                <li class="relative py-2 group lg:mb-1 mb-2 cursor-pointer" id="button_about">
                    <a class="whitespace-no-wrap no-underline hover:text-white hover:underline p-2">
                        <span class="inline-flex">About
                            {{--  <svg class="w-2 ml-2 fill-current hidden lg:block" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                                        c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                                        c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z" />
                                </g>
                            </svg>  --}}
                        </span>
                    </a>
                    <ul
                        class="py-3 text-left text-gray-900 absolute right-0 top-0 lg:mt-10 mt-12 lg:mr-0 mr-40 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block w-auto">
                        <svg class="block fill-current text-white w-4 h-4 absolute right-0 top-0 lg:mr-2 mr-16 -mt-3 z-10"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0">
                            </path>
                        </svg>
                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-6" href="/about">
                                <span class="">Company</span>
                            </a>
                        </li>

                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-6" href="/blog">
                                <span class="">Blog</span>
                            </a>
                        </li>

                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-6" href="/gallery">
                                <span class="">Gallery</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="relative py-2 group lg:mb-1 mb-2 cursor-pointer" id="button_service">
                    <a class="whitespace-no-wrap no-underline hover:text-white hover:underline p-2">
                        <span class="inline-flex">Services
                            {{--  <svg class="w-2 ml-2 fill-current hidden lg:block" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                                                c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                                                c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z" />
                                </g>
                            </svg>  --}}
                        </span>
                    </a>
                    <ul
                        class="py-3 text-left text-gray-900 absolute right-0 top-0 inset-x-auto lg:mt-10 mt-12 lg:mr-0 mr-32 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block w-auto">
                        <svg class="block fill-current text-white w-4 h-4 absolute right-0 top-0 lg:mr-2 mr-24 -mt-3 z-10"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0">
                            </path>
                        </svg>
                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-5" href="/flight#bookings">
                                <span class="">Flight Booking</span>
                            </a>
                        </li>

                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-5" href="/hotel#bookings">
                                <span class="">Hotel Reservation</span>
                            </a>
                        </li>

                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-5" href="/visa#bookings">
                                <span class="">Visa Application</span>
                            </a>
                        </li>

                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-5" href="/study#bookings">
                                <span class="">Study Abroad</span>
                            </a>
                        </li>

                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-5" href="/delivery#bookings">
                                <span class="">Delivery Service</span>
                            </a>
                        </li>
                    </ul>
                </li>

                @guest
                <li class="relative py-2 group lg:mb-1 mb-2 cursor-pointer" id="button_account">
                    <a class="whitespace-no-wrap no-underline hover:text-white hover:underline p-2">
                        <span class="inline-flex">Account
                            {{--  <svg class="w-2 ml-2 fill-current hidden lg:block" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                                                c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                                                c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z" />
                                </g>
                            </svg>  --}}
                        </span>
                    </a>
                    <ul
                        class="py-3 text-left text-gray-900 absolute right-0 top-0 lg:mt-10 mt-12 lg:mr-0 mr-40 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block w-auto">
                        <svg class="block fill-current text-white w-4 h-4 absolute right-0 top-0 lg:mr-2 mr-12 -mt-3 z-10"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0">
                            </path>
                        </svg>
                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-6" href="{{ route('login') }}">
                                <span>{{ __('Login') }}</span>
                            </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-6" href="{{ route('register') }}">
                                <span>{{ __('Register') }}</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @else

                <li class="relative py-2 group lg:mb-1 mb-2 cursor-pointer" id="button_user">
                    <a class="whitespace-no-wrap no-underline hover:text-white hover:underline p-2">
                        <span class="inline-flex">
                            <img src="{{ Auth::user()-> avater }}" alt="{{ Auth::user()->first_name }}'s avater"
                                class="w-8 mr-2 rounded-full border border-gray-900">
                            {{ Auth::user()->first_name }}
                            {{--  <svg class="w-2 ml-2 fill-current hidden lg:block" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                                                        c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                                                        c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z" />
                                </g>
                            </svg>  --}}
                        </span>
                    </a>
                    <ul
                        class="py-3 text-left text-gray-900 absolute right-0 top-0 lg:mt-10 mt-12 lg:mr-0 mr-32 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block w-auto">
                        <svg class="block fill-current text-white w-4 h-4 absolute right-0 top-0 lg:mr-2 mr-12 -mt-3 z-10"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0">
                            </path>
                        </svg>
                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-5" href="/dashboard">
                                <span class="">Dashboard</span>
                            </a>
                        </li>

                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <a class="nav-link py-2 px-5" href="/account_setting">
                                <span class="">Profile</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap mb-1 md:mb-0 hover:text-white hover:bg-gray-900">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="nav-link py-2 px-5" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <span>{{ __('Logout') }}</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest

                <li class="relative py-2 group lg:mb-1 mb-2 cursor-pointer lg:inline-block text-gray-900">
                    <a class="font-semibold whitespace-no-wrap hover:underline bg-gray-300 py-3 px-4 rounded-full"
                        href="/contact" id="button_like">
                        <span class="">Contact Us</span>
                    </a>
                </li>

                <li class="p-2 group text-center lg:mb-1 mb-2 cursor-pointer lg:inline-block group search-icon" id="search-toggle">
                    <svg class="fill-current text-grey-darkest w-6 text-center mx-auto" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>search</title>
                        <path
                            d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                        </path>
                    </svg>
                </li>

            </ul>

            <div class="relative w-full hidden bg-white search" id="search-content">
                <div class="container mx-auto text-black">
                    <input id="searchfield" type="search" placeholder="Search..." autofocus="autofocus"
                        class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">
                </div>
            </div>

        </div>
    </div>

    <!--Search-->

</nav>
