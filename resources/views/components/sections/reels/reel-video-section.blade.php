<div class="py-20 px-20 min-h-screen h-auto bg-no-repeat bg-center bg-cover bg-black bg-blend-darken bg-opacity-80"
    style="background-image: url('https://images.pexels.com/photos/354939/pexels-photo-354939.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
    <div
        class="md:space-x-5 space-y-5 md:space-y-0 h-auto flex flex-col md:flex-row items-start justify-between max-h-[1000px]">

        <div class="w-full md:w-10/12 space-y-5">

            <div class="my-auto ring-2 ring-gray-300">

                <video id="player" playsinline controls data-poster="assets/images/video-background.jpg" class="w-full">
                    <source src="{{ asset('assets/videos/test.mp4') }}" type="video/mp4" />
                </video>

            </div>

            <div class="flex flex-col md:flex-row items-start justify-between space-y-2 md:space-y-0 my-5">

                <h5 class="font-semibold text-white text-lg">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Qui aliquid voluptatem hic omnis cupiditate illo esse beatae facere
                    veniam
                    delectus.
                </h5>

                <x-dropdowns.share-dropdown />
            </div>

            <div class="my-2 capitalize font-bold text-white text-xs flex items-center justify-start">
                <span class="h-5 border-2 border-blue-500 mr-1">
                </span>
                <span>

                    world
                </span>
            </div>

            <p class="text-xs text-white font-semibold">

                <i class="fa-solid fa-calendar"></i>
                22-July-2025 | Monday 12:00 PM
            </p>
            <p class="text-xs text-white font-semibold">

                <i class="fa-solid fa-film"></i>
                Video by <span class="text-blue-600"> Aung Thu Zaw</span>
            </p>

            <p class="text-white text-sm">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, molestias magnam. Expedita
                odit repudiandae voluptas optio ducimus qui ipsam laudantium necessitatibus eveniet corporis
                assumenda, at architecto, iusto aliquid recusandae dolores est id, animi sapiente fugiat
                dolor quasi quam porro. Quae dolorem quaerat impedit, maxime magnam aliquid corrupti iusto,
                rerum earum eum praesentium enim deserunt eius vel necessitatibus debitis nulla, cum commodi
                repudiandae. Esse voluptas, ab molestiae hic adipisci asperiores eos animi! Corporis
                molestias, aspernatur a maxime tempora ipsum placeat pariatur magnam vero esse adipisci
                cupiditate laborum repellendus, harum porro libero totam laboriosam explicabo fugit eius
                neque iusto. Fugiat, quisquam ipsam!
            </p>
            <br>
            <p class="text-white text-sm">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, molestias magnam. Expedita
                odit repudiandae voluptas optio ducimus qui ipsam laudantium necessitatibus eveniet corporis
                assumenda, at architecto, iusto aliquid recusandae dolores est id, animi sapiente fugiat
                dolor quasi quam porro. Quae dolorem quaerat impedit, maxime magnam aliquid corrupti iusto,
                rerum earum eum praesentium enim deserunt eius vel necessitatibus debitis nulla, cum commodi
                repudiandae. Esse voluptas, ab molestiae hic adipisci asperiores eos animi! Corporis
                molestias, aspernatur a maxime tempora ipsum placeat pariatur magnam vero esse adipisci
                cupiditate laborum repellendus, harum porro libero totam laboriosam explicabo fugit eius
                neque iusto. Fugiat, quisquam ipsam!
            </p>
        </div>
        <div class="w-full md:w-4/12">

            <x-cards.reel-video-playlist-card />

        </div>
    </div>
</div>