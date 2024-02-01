<section id="news">
    <div class="w-full md:container mx-auto my-5 py-6 px-5 md:px-0">
        <div class="flex flex-col lg:flex-row items-start justify-between lg:space-x-5">
            <div class="w-full lg:w-8/12 space-y-10">
                <!-- Category Post Start -->
                <div>
                    <div class="mb-2 flex items-center justify-between">

                        <h1 class="font-bold text-lg text-gray-700 w-auto">Sports</h1>

                        <div class="border-2 border-gray-600 w-[200px] md:w-[400px] lg:w-[500px]"></div>

                        <button
                            class="w-auto text-sm font-bold text-gray-800 rounded-full px-3 py-2 hover:bg-slate-200 transition-all">
                            See All
                            <i class="fa-solid fa-angles-right ml-1"></i>
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <x-cards.grid-news-card />


                        <div class="space-y-3">
                            <x-cards.horizontal-news-card />
                            <x-cards.horizontal-news-card />
                            <x-cards.horizontal-news-card />
                        </div>
                    </div>
                </div>
                <!-- Category Post End -->
            </div>
            <x-sections.news.news-section-aside />
        </div>
    </div>
</section>