<header class="w-full md:container mx-auto min-h-[450px] px-5 md:px-0">
    <div class="relative grid grid-cols-1 md:grid-cols-2 gap-3">
        <div class="w-full">
            <div
                class="block rounded-sm bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] h-[250px]  overflow-hidden md:h-[450px]">
                <img class="rounded-md h-full object-cover" src="https://tecdn.b-cdn.net/img/new/slides/017.webp"
                    alt="" />
                <div
                    class="absolute top-0 md:bottom-0 px-10 py-5 overflow-hidden w-full md:w-6/12 h-full mx-auto flex flex-col items-start justify-start md:justify-end">
                    <h5 class="mb-5 text-xl font-medium leading-tight text-white line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt velit cupiditate quo
                        iste neque eligendi voluptatem laudantium autem eum numquam, labore aliquam? Provident
                        ab perspiciatis quis, neque nihil rerum consequuntur!
                    </h5>
                    <p class="mb-4 text-sm font-thin text-white line-clamp-3">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam dignissimos deserunt
                        voluptates nesciunt voluptas recusandae maiores totam illo quis reiciendis nam optio
                        voluptate ipsum at, enim quos quas asperiores, nulla temporibus. Voluptas facere
                        asperiores possimus quod consequatur excepturi itaque amet?
                    </p>

                    <div class="my-5 capitalize font-bold text-white text-xs flex items-center justify-center">
                        <span class="h-5 border-2 border-yellow-500 mr-1">
                        </span>
                        <span>

                            world
                        </span>
                    </div>

                    <div class="flex items-center justify-between w-full">

                        <p class="text-base text-white">
                            <small class="text-white">
                                <i class="fa-solid fa-clock"></i>
                                Last updated 3 mins ago</small>
                        </p>
                        <p class="text-base text-white">
                            <small class="text-white">
                                <i class="fa-solid fa-book-open-reader"></i>
                                5 Minutes Read</small>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class=" grid grid-rows-2 gap-3">
            <div class=" relative grid grid-cols-1 md:grid-cols-2 gap-3">
                <x-cards.header-news-card />
                <x-cards.header-news-card />
            </div>


            <div class=" relative grid grid-cols-1 md:grid-cols-2 gap-3">
                <x-cards.header-news-card />
                <x-cards.header-news-card />
            </div>
        </div>
    </div>
</header>