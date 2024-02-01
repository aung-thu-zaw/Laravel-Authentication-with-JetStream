<section id="most-watched" class="py-5 md:py-10">
    <div class="w-full md:container mx-auto my-5 py-6 px-5 md:px-0">
        <div class="flex items-center justify-center space-x-3 md:space-x-5 mb-5">
            <div class="border-2 border-gray-300 w-[100px]"></div>
            <h1 class="text-center font-bold text-lg md:text-3xl text-gray-700"><i
                    class="fa-solid fa-clock-rotate-left mr-3"></i> Most Watched</h1>
            <div class="border-2 border-gray-300 w-[100px]"></div>
        </div>

        <p class="text-md text-gray-600 font-semibold text-xs md:text-md mb-10 text-center">See the videos our
            audience loves.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
            <x-cards.reel-video-thumbnail-card />
        </div>
    </div>
</section>