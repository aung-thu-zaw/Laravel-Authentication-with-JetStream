<section id="photo-you-should-see">
    <div class="w-full md:container mx-auto my-5 py-6 px-5 md:px-0">

        <div class="flex items-center justify-between">

            <h1 class="text-xl md:text-3xl font-bold text-gray-800 my-3">Featured Videos</h1>

            <button
                class="text-gray-700 border border-gray-400 px-5 py-3 rounded-full text-sm font-semibold hover:bg-black hover:text-white transition-all">
                See More Videos
                <i class="fa-solid fa-angles-right ml-1"></i></button>
        </div>

        <div class="my-5">
            <div class="border border-gray-700"></div>
            <hr>
            <div class="border border-gray-700"></div>
        </div>

        <div
            class="md:space-x-5 space-y-5 md:space-y-0 h-auto flex flex-col md:flex-row items-start justify-between max-h-[1000px]">

            <div class="w-full md:w-8/12 space-y-5">

                <div class="my-auto">

                    <video id="player" playsinline controls data-poster="assets/images/video-background.jpg"
                        class="w-full">
                        <source src="{{ asset('assets/videos/test.mp4') }}" type="video/mp4" />
                    </video>

                </div>


                <h5 class="font-semibold text-gray-800 text-lg my-5">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Qui aliquid voluptatem hic omnis cupiditate illo esse beatae facere veniam
                    delectus.
                </h5>


                <div class="my-2 capitalize font-bold text-gray-700 text-xs flex items-center justify-start">
                    <span class="h-5 border-2 border-yellow-500 mr-1">
                    </span>
                    <span>

                        world
                    </span>
                </div>

                <p class="text-xs text-gray-700 font-semibold">

                    <i class="fa-solid fa-clock"></i>
                    Last updated 3 mins ago
                </p>

            </div>
            <div class="w-full md:w-4/12">

                <div class="border bg-white border-gray-300 rounded-md shadow h-[500px] max-h-[800px]">

                    <div class=" border-b border-gray-200">
                        <ul class="flex  items-center justify-between px-12 text-sm font-medium " id="myTab"
                            data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                    data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Latest Videos</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button
                                    class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                    aria-controls="dashboard" aria-selected="false">Recommended</button>
                            </li>

                        </ul>
                    </div>

                    <div id="myTabContent" class="h-[440px] max-h-[700px] py-2 overflow-auto">
                        <div class="hidden px-2 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                        </div>
                        <div class="hidden px-2 rounded-lg" id="dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                            <div class=" flex items-start hover:bg-gray-200 rounded-md px-4 py-3">
                                <div class="w-3/12 mr-1">
                                    <img src="assets/images/video-background.jpg" alt=""
                                        class="rounded-md shadow h-16 object-cover">
                                </div>
                                <div class="w-9/12">
                                    <h5 class="line-clamp-2 font-semibold text-gray-800 text-sm">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Est facere nostrum
                                        quibusdam, debitis quis necessitatibus error, magni aspernatur totam
                                        provident facilis assumenda, perspiciatis vero odio fuga iusto iste
                                        deserunt reiciendis!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>