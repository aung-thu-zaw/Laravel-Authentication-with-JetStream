<x-app-layout>
    <div class="my-5 w-full md:container mx-auto px-5 md:px-0">

        <x-forms.news-search-form />

        <div class="my-5 flex flex-col md:flex-row items-center justify-between">
            <div>
                <ul class="list-style-none  flex flex-col pl-0 lg:flex-row md:space-x-6 mx-auto w-[300px]"
                    data-te-navbar-nav-ref>
                    <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                        <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                            href="#" data-te-nav-link-ref>All</a>

                        <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-slate-600 transition-all">
                        </div>
                    </li>
                    <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                        <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                            href="#" data-te-nav-link-ref>Articles</a>

                        <div class="h-[3px] scale-x-100 bg-red-600 transition-all">
                        </div>
                    </li>
                    <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                        <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                            href="#" data-te-nav-link-ref>Videos</a>

                        <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-blue-600 transition-all">
                        </div>
                    </li>
                    <li class="mb-4 lg:mb-0 lg:pr-2 group" data-te-nav-item-ref>
                        <a class="text-gray-600 text-sm font-semibold transition duration-200 hover:text-gray-700 hover:ease-in-out focus:text-gray-700 disabled:text-black/30 motion-reduce:transition-none"
                            href="#" data-te-nav-link-ref>Photos</a>

                        <div class="h-[3px] group-hover:-scale-x-100 group-hover:bg-red-600 transition-all">
                        </div>
                    </li>


                </ul>
            </div>


            <x-dropdowns.news-filter-dropdown />

        </div>

        <hr class="my-5" />

        <div class="flex items-center justify-between">
            <p class="font-bold text-gray-700 text-sm">Displaying 1-10 results out of 2632</p>

            <div class=" flex items-center space-x-5">
                <span class="text-sm font-semibold text-gray-600">Sorting By :
                </span>

                <div>
                    <button class="border px-5 py-2 text-sm bg-gray-800 text-white rounded-md shadow-lg">Newest</button>
                    <button
                        class="border px-5 py-2 text-sm  border-gray-400 text-gray-900 rounded-md shadow-lg">Oldest</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Filter News Section  -->
    <section id="filter-news">
        <div class="w-full md:container mx-auto my-5 py-3 px-5 md:px-0">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <x-cards.grid-news-card />
                <x-cards.grid-news-card />
                <x-cards.grid-news-card />
                <x-cards.grid-news-card />
                <x-cards.grid-news-card />
                <x-cards.grid-news-card />
            </div>
        </div>
    </section>
</x-app-layout>