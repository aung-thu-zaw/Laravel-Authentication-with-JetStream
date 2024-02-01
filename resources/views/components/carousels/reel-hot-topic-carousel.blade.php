<div class="">
    <div class="flex items-center justify-center w-full h-full py-16 sm:py-8">
        <div class="w-full relative flex items-center justify-center">
            <button aria-label="slide backward"
                class="absolute z-30 left-0 ml-6 focus:outline-none bg-gray-50 border border-gray-400 shadow-lg hover:bg-gray-100 p-2 w-12 h-12 rounded-full flex items-center justify-center"
                id="prev">
                <svg class="text-gray-700" width="10" height="16" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider"
                    class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">

                    <x-cards.reel-video-thumbnail-carousel-card />
                    <x-cards.reel-video-thumbnail-carousel-card />
                    <x-cards.reel-video-thumbnail-carousel-card />
                    <x-cards.reel-video-thumbnail-carousel-card />
                    <x-cards.reel-video-thumbnail-carousel-card />

                </div>
            </div>

            <button aria-label="slide forward"
                class="absolute z-30 right-0 mr-6 focus:outline-none bg-gray-50 border border-gray-400 shadow-lg hover:bg-gray-100 p-2 w-12 h-12 rounded-full flex items-center justify-center"
                id="next">
                <svg class="text-gray-700" width="10" height="16" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</div>