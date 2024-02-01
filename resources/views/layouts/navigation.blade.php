{{-- <div class="sticky top-0 z-20 border-b-4 border-red-600"> --}}
    <div class="sticky top-0 z-20">
        <nav class="relative flex w-full flex-wrap items-center justify-between bg-black py-2 text-white shadow-lg lg:py-2 text-xs px-6"
            data-te-navbar-ref>
            <div>
                <i class="fa-solid fa-calendar-day"></i> Tuesday, October 17, 2023
            </div>

            <div class="flex items-center md:space-x-8">
                <!-- Icon dropdown -->
                <div class="relative ml-4" data-te-dropdown-ref>
                    <a class="mr-4 flex items-center transition duration-200 hover:ease-in-out  motion-reduce:transition-none"
                        href="#" id="navbarDropdown" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
                        <span class="relative inline-block w-auto text-white font-bold">
                            Languages
                            <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul class="absolute left-0 right-auto z-[1000] float-right m-0 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                        aria-labelledby="navbarDropdown" data-te-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled: disabled:bg-transparent disabled:text-gray-400"
                                href="#" data-te-dropdown-item-ref>
                                <span
                                    class="relative mr-2 inline-block h-[11px] w-4 overflow-hidden bg-gray-200 leading-[11px] decoration-inherit">
                                    <span
                                        class="inline-block h-[11px] w-4 content-[''] [background-position:-36px_-26px_!important] [background:url(https://tecdn.b-cdn.net/img/svg/flags.png)_no-repeat_-108px_-1976px]"></span>
                                </span>
                                <span class="mr-4">English</span>

                            </a>
                        </li>
                        x
                    </ul>
                </div>

                <div class="font-semibold">
                    <i class="fa-solid fa-video"></i>
                    Live Tv
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        <nav class="relative flex w-full flex-wrap items-center justify-between bg-[#FBFBFB] py-2 text-gray-600 text-sm font-semibold shadow-lg hover:text-gray-700 focus:text-gray-700 lg:py-4"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div>
                    <a class="mx-2 my-1 flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 lg:mb-0 lg:mt-0"
                        href="#">
                        <img class="mr-2 h-4 object-cover" src="./assets/images/nav-logo.png" alt="News Logo"
                            loading="lazy" />
                    </a>
                </div>

                <!-- Hamburger button for mobile view -->
                <button
                    class="block border-0 bg-transparent px-2 text-gray-600 text-sm font-semibold hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
                    type="button" data-te-collapse-init data-te-target="#navbarSupportedContent4"
                    aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Hamburger icon -->
                    <span class="[&>svg]:w-7">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                            <path fill-rule="evenodd"
                                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>

                <!-- Collapsible navbar container -->
                <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto "
                    id="navbarSupportedContent4" data-te-collapse-item>
                    <!-- Left links -->
                    <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row md:space-x-6 mx-auto"
                        data-te-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                            <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                                href="#" data-te-nav-link-ref>Home</a>

                            <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-slate-600 transition-all">
                            </div>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                            <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                                href="#" data-te-nav-link-ref>News</a>

                            <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-red-600 transition-all">
                            </div>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                            <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                                href="#" data-te-nav-link-ref>Reel</a>

                            <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-blue-600 transition-all">
                            </div>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                            <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                                href="#" data-te-nav-link-ref>Podcast</a>

                            <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-emerald-600 transition-all">
                            </div>
                        </li>

                        <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                            <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                                href="#" data-te-nav-link-ref>Gallery</a>

                            <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-pink-600 transition-all">
                            </div>
                        </li>

                    </ul>

                    <div class="flex items-center">
                        <button id="searchBoxButton"
                            class="text-md hover:bg-gray-200 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer mr-5">

                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>

                        <div id="mainSearchBox"
                            class="fixed hidden z-30 top-0 right-0 left-0 bottom-0 bg-black bg-opacity-95">
                            <div class="flex items-center justify-center px-10 py-5">
                                <div class=" min-w-[300px] w-10/12 mr-5">

                                    <form>

                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                </svg>
                                            </div>
                                            <input type="search" id="default-search"
                                                class="block w-full p-5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-slate-300 focus:border-orange-300"
                                                placeholder="Search ...." required />
                                            <button type="submit"
                                                class="text-white absolute right-2.5 bottom-2 bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-full text-sm px-5 py-3">
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <button id="searchBoxCloseButton"
                                    class="bg-slate-500 border-accent-light text-white hover:bg-slate-600 rounded-full p-3 hover:border-accent-light transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <hr class="mb-5" />

                            <div
                                class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-5 place-items-center text-white">

                                <div>
                                    <h3 class="font-bold text-xl mb-3">World</h3>

                                    <ul class="hidden md:block space-y-2 text-sm font-medium">
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl mb-3">World</h3>

                                    <ul class="hidden md:block space-y-2 text-sm font-medium">
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl mb-3">World</h3>

                                    <ul class="hidden md:block space-y-2 text-sm font-medium">
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl mb-3">World</h3>

                                    <ul class="hidden md:block space-y-2 text-sm font-medium">
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl mb-3">World</h3>

                                    <ul class="hidden md:block space-y-2 text-sm font-medium">
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl mb-3">World</h3>

                                    <ul class="hidden md:block space-y-2 text-sm font-medium">
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl mb-3">World</h3>

                                    <ul class="hidden md:block space-y-2 text-sm font-medium">
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                        <li>Travel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <a href="./login.html"
                            class="mr-3 border shadow border-gray-400 font-bold hover:bg-gray-200 px-5 py-2 rounded-full transition-all">
                            <i class="fa-solid fa-user"></i>
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>