<!-- Navbar  -->
<nav class="absolute top-0 z-10 flex w-full flex-wrap items-center justify-between bg-transparent py-2 text-gray-600 text-sm font-semibold  hover:text-gray-700 focus:text-gray-700 lg:py-4"
    data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <div>
            <a class="mx-2 my-1 flex items-center font-bold text-xl md:text-4xl text-white hover:text-gray-900 focus:text-gray-900 lg:mb-0 lg:mt-0"
                href="#">
                REEL
            </a>
        </div>

        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-gray-600 text-sm font-semibold hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
            type="button" data-te-collapse-init data-te-target="#reelNavbar" aria-controls="reelNavbar"
            aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center  lg:mt-0 lg:!flex lg:basis-auto bg-white md:bg-transparent"
            id="reelNavbar" data-te-collapse-item>
            <!-- Left links -->
            <ul class="list-style-none flex flex-col pl-0 lg:flex-row md:space-x-6 ml-auto " data-te-navbar-nav-ref>
                <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                    <a class="text-white text-sm font-semibold transition duration-200  hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                        href="#" data-te-nav-link-ref>Home</a>

                    <div class="h-[3px] scale-x-100 bg-blue-600 transition-all">
                    </div>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                    <a class="text-white text-sm font-semibold transition duration-200  hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                        href="#" data-te-nav-link-ref>Playlists</a>

                    <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-blue-600 transition-all">
                    </div>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                    <a class="text-white text-sm font-semibold transition duration-200  hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                        href="#" data-te-nav-link-ref>History</a>

                    <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-blue-600 transition-all">
                    </div>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                    <a class="text-white text-sm font-semibold transition duration-200  hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                        href="#" data-te-nav-link-ref>Science</a>

                    <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-blue-600 transition-all">
                    </div>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                    <a class="text-white text-sm font-semibold transition duration-200  hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                        href="#" data-te-nav-link-ref>Technology</a>

                    <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-blue-600 transition-all">
                    </div>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                    <a class="text-white text-sm font-semibold transition duration-200  hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                        href="#" data-te-nav-link-ref>Future</a>

                    <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-blue-600 transition-all">
                    </div>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                    <a class="text-white text-sm font-semibold transition duration-200  hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                        href="#" data-te-nav-link-ref>World</a>

                    <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-blue-600 transition-all">
                    </div>
                </li>


                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="world"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white text-sm font-semibold  rounded md:p-0 md:w-auto ">More
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="world"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">World</a>
                            </li>
                        </ul>

                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>