<x-app-layout>

    <!-- Latest News -->
    <div class="my-5 px-5">
        <div
            class="w-full md:container mx-auto border border-slate-400 shadow-md rounded-md overflow-hidden flex items-center">
            <div
                class="bg-black text-white p-3 md:p-4 text-xs md:text-sm font-bold min-w-[100px] md:min-w-[120px] w-auto">
                Latest News</div>
            <div class="p-3 md:p-4 text-gray-700 text-xs overflow-hidden">
                <span class="line-clamp-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perspiciatis asperiores
                    consequatur rerum, sit quas alias expedita possimus aperiam facilis quaerat debitis provident,
                    obcaecati architecto maxime harum est quo ad?
                </span>
            </div>
        </div>
    </div>

    <!-- Main Header Section  -->
    <x-sections.home.header-main-section />

    <!-- News Section  -->
    <x-sections.news.news-section />

    <!-- Featured Sections  -->
    <x-sections.home.feature-videos-section />

    <!-- Video Section  -->
    <x-sections.home.reel-videos-section />

    <!-- Photo You should See section  -->
    <x-sections.home.photo-you-should-see-section />

</x-app-layout>