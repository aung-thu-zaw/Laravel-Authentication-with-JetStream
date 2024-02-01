<section id="editor-pick" class="bg-white py-5 md:py-10">
    <div class="w-full md:container mx-auto my-5 py-6 px-5 md:px-0">
        <div class="flex items-center justify-center space-x-3 md:space-x-5 mb-5">
            <div class="border-2 border-gray-300 w-[100px]"></div>
            <h1 class="text-center font-bold text-lg md:text-3xl text-gray-700"><i class="fa-solid fa-fire mr-3"></i>Hot
                Topics</h1>
            <div class="border-2 border-gray-300 w-[100px]"></div>
        </div>

        <p class="text-md text-gray-600 font-semibold  text-xs md:text-md  mb-10 text-center">Trending topics
            for curious minds.</p>


        <div class="mb-5">
            <div class="space-y-3 md:space-y-5">
                <h5 class="font-medium text-gray-500 text-md"><i class="fa-solid fa-photo-film mr-3"></i>35
                    Videos
                </h5>
                <h1 class="font-bold text-xl md:text-3xl text-gray-800">Love & Sex</h1>

                <p class="text-md text-gray-600 font-semibold  text-xs md:text-md  mb-10 ">The different ways
                    we
                    express ourselves romantically and sexually.</p>
            </div>
            <x-carousels.reel-hot-topic-carousel />
        </div>
    </div>
</section>

@push('reel-carousel')
<script>
    let defaultTransform = 0;

function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);

function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);
</script>
@endpush