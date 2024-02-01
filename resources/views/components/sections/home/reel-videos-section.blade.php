<section id="video-section">
    <div class="w-full  mx-auto my-5 py-10 bg-black">
        <div class="w-full md:container mx-auto px-5 md:px-0">
            <h1 class="uppercase text-white font-bold text-2xl md:text-4xl mb-5"><i
                    class="fa-solid fa-video mr-3"></i>Reel Videos</h1>

            <p class="text-lg text-white font-semibold mb-5">The most amazing videos from our news website</p>

            <div class=" mb-5 flex items-center justify-end">
                <button
                    class="text-white border px-5 py-3 rounded-full text-sm font-semibold hover:bg-white hover:text-black transition-all">View
                    More <i class="fa-solid fa-angles-right ml-1"></i>
                </button>
            </div>

            <!-- card  -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <x-cards.video-card />
                <x-cards.video-card />
                <x-cards.video-card />
            </div>
        </div>
    </div>
</section>