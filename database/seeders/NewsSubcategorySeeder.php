<?php

namespace Database\Seeders;

use App\Models\NewsSubcategory;
use Illuminate\Database\Seeder;

class NewsSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // World
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "Africa"]);
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "America"]);
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "Asia"]);
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "Australia"]);
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "China"]);
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "Europe"]);
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "India"]);
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "Middle East"]);
        NewsSubcategory::factory()->create(["news_category_id" => 1,"name" => "United Kingdom"]);

        // Business
        NewsSubcategory::factory()->create(["news_category_id" => 2,"name" => "Market Data"]);
        NewsSubcategory::factory()->create(["news_category_id" => 2,"name" => "New Tech Economy"]);
        NewsSubcategory::factory()->create(["news_category_id" => 2,"name" => "Companies"]);
        NewsSubcategory::factory()->create(["news_category_id" => 2,"name" => "Media"]);
        NewsSubcategory::factory()->create(["news_category_id" => 2,"name" => "CEO Secrets"]);
        NewsSubcategory::factory()->create(["news_category_id" => 2,"name" => "Artificial Intelligent"]);

        // Markets
        NewsSubcategory::factory()->create(["news_category_id" => 3,"name" => "Stocks and Investments"]);
        NewsSubcategory::factory()->create(["news_category_id" => 3,"name" => "Economic Trends"]);
        NewsSubcategory::factory()->create(["news_category_id" => 3,"name" => "Business Updates"]);
        NewsSubcategory::factory()->create(["news_category_id" => 3,"name" => "Commodities and Forex"]);
        NewsSubcategory::factory()->create(["news_category_id" => 3,"name" => "Technology Markets"]);

        // Health
        NewsSubcategory::factory()->create(["news_category_id" => 4,"name" => "Fitness"]);
        NewsSubcategory::factory()->create(["news_category_id" => 4,"name" => "Food"]);
        NewsSubcategory::factory()->create(["news_category_id" => 4,"name" => "Sleep"]);
        NewsSubcategory::factory()->create(["news_category_id" => 4,"name" => "Relationship"]);
        NewsSubcategory::factory()->create(["news_category_id" => 4,"name" => "Mindfulness"]);
        NewsSubcategory::factory()->create(["news_category_id" => 4,"name" => "Better Life"]);

        // Entertainment
        NewsSubcategory::factory()->create(["news_category_id" => 5,"name" => "Movies"]);
        NewsSubcategory::factory()->create(["news_category_id" => 5,"name" => "Televisions"]);
        NewsSubcategory::factory()->create(["news_category_id" => 5,"name" => "Celebrity"]);

        // Tech
        NewsSubcategory::factory()->create(["news_category_id" => 6,"name" => "Gadget"]);
        NewsSubcategory::factory()->create(["news_category_id" => 6,"name" => "Upstarts"]);

        // Travel
        NewsSubcategory::factory()->create(["news_category_id" => 7,"name" => "Food & Drink"]);
        NewsSubcategory::factory()->create(["news_category_id" => 7,"name" => "Stay"]);
        NewsSubcategory::factory()->create(["news_category_id" => 7,"name" => "News"]);
        NewsSubcategory::factory()->create(["news_category_id" => 7,"name" => "Destinations"]);
        NewsSubcategory::factory()->create(["news_category_id" => 7,"name" => "Videos"]);

        // Sports
        NewsSubcategory::factory()->create(["news_category_id" => 8,"name" => "Football"]);
        NewsSubcategory::factory()->create(["news_category_id" => 8,"name" => "Tennis"]);
        NewsSubcategory::factory()->create(["news_category_id" => 8,"name" => "Baseball"]);
        NewsSubcategory::factory()->create(["news_category_id" => 8,"name" => "Golf"]);
        NewsSubcategory::factory()->create(["news_category_id" => 8,"name" => "Climbing"]);
        NewsSubcategory::factory()->create(["news_category_id" => 8,"name" => "Basketball"]);

        // Style
        NewsSubcategory::factory()->create(["news_category_id" => 9,"name" => "Arts"]);
        NewsSubcategory::factory()->create(["news_category_id" => 9,"name" => "Design"]);
        NewsSubcategory::factory()->create(["news_category_id" => 9,"name" => "Fashion"]);
        NewsSubcategory::factory()->create(["news_category_id" => 9,"name" => "Luxury"]);
        NewsSubcategory::factory()->create(["news_category_id" => 9,"name" => "Beauty"]);
        NewsSubcategory::factory()->create(["news_category_id" => 9,"name" => "Architecture"]);

        // Politics
        NewsSubcategory::factory()->create(["news_category_id" => 10,"name" => "2024 Elections"]);
        NewsSubcategory::factory()->create(["news_category_id" => 10,"name" => "Revolutions"]);

        // E-Sports
        NewsSubcategory::factory()->create(["news_category_id" => 11,"name" => "Game"]);

    }
}
