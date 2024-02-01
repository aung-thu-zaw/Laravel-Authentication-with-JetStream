<div class="w-full lg:w-4/12 my-5 lg:my-0  py-2 space-y-8">
    <!-- Live Videos -->
    <div>
        <h1 class="text-lg font-bold text-gray-700 mb-3">
            <i class="fa-brands fa-youtube text-red-600 animate-pulse"></i>
            Youtube Live
        </h1>

        <x-cards.youtube-live-card />
    </div>

    <!-- filtered by Date  -->
    <x-cards.search-by-date-card />

    <!-- Most viewed  -->
    <div class="border p-5 bg-white shadow-md rounded-md space-y-3">
        <h1 class="text-lg font-bold text-gray-700 mb-3">
            <i class="fa-solid fa-award"></i>
            Editer's Pick
        </h1>


        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />
        <x-cards.horizontal-news-card />

    </div>

    <!-- Subscribe News Letter  -->
    <x-cards.newsletter-card />

    <!-- Follow Us  -->
    <x-cards.follow-us-card />
</div>