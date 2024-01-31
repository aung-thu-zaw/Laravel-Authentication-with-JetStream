<?php

namespace Database\Seeders;

use App\Models\NewsTag;
use Illuminate\Database\Seeder;

class NewsTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsTag::factory()->create(["name" => "Politics"]);
        NewsTag::factory()->create(["name" => "Technology"]);
        NewsTag::factory()->create(["name" => "Science"]);
        NewsTag::factory()->create(["name" => "Health"]);
        NewsTag::factory()->create(["name" => "Business"]);
        NewsTag::factory()->create(["name" => "Entertainment"]);
        NewsTag::factory()->create(["name" => "Sports"]);
        NewsTag::factory()->create(["name" => "Environment"]);
        NewsTag::factory()->create(["name" => "Education"]);
        NewsTag::factory()->create(["name" => "International"]);
        NewsTag::factory()->create(["name" => "Economy"]);
        NewsTag::factory()->create(["name" => "Lifestyle"]);
        NewsTag::factory()->create(["name" => "Travel"]);
        NewsTag::factory()->create(["name" => "Fashion"]);
        NewsTag::factory()->create(["name" => "Food"]);
        NewsTag::factory()->create(["name" => "Music"]);
        NewsTag::factory()->create(["name" => "Movies"]);
        NewsTag::factory()->create(["name" => "Art"]);
        NewsTag::factory()->create(["name" => "Gaming"]);
        NewsTag::factory()->create(["name" => "Opinion"]);
        NewsTag::factory()->create(["name" => "Analysis"]);
        NewsTag::factory()->create(["name" => "Weather"]);
        NewsTag::factory()->create(["name" => "Innovation"]);
        NewsTag::factory()->create(["name" => "Startups"]);
        NewsTag::factory()->create(["name" => "Social Issues"]);
        NewsTag::factory()->create(["name" => "Trends"]);
        NewsTag::factory()->create(["name" => "Culture"]);
        NewsTag::factory()->create(["name" => "Literature"]);
        NewsTag::factory()->create(["name" => "Fitness"]);
        NewsTag::factory()->create(["name" => "Celebrities"]);
        NewsTag::factory()->create(["name" => "Events"]);
        NewsTag::factory()->create(["name" => "Photography"]);
        NewsTag::factory()->create(["name" => "Design"]);
        NewsTag::factory()->create(["name" => "Gadgets"]);
        NewsTag::factory()->create(["name" => "Research"]);
        NewsTag::factory()->create(["name" => "History"]);
        NewsTag::factory()->create(["name" => "Architecture"]);
        NewsTag::factory()->create(["name" => "Automotive"]);
        NewsTag::factory()->create(["name" => "Humor"]);
        NewsTag::factory()->create(["name" => "Podcasts"]);
        NewsTag::factory()->create(["name" => "Interviews"]);
        NewsTag::factory()->create(["name" => "DIY"]);
        NewsTag::factory()->create(["name" => "Pets"]);
        NewsTag::factory()->create(["name" => "Parenting"]);
        NewsTag::factory()->create(["name" => "Spirituality"]);
        NewsTag::factory()->create(["name" => "Science Fiction"]);
        NewsTag::factory()->create(["name" => "Virtual Reality"]);
        NewsTag::factory()->create(["name" => "Cryptocurrency"]);
        NewsTag::factory()->create(["name" => "Space Exploration"]);
        NewsTag::factory()->create(["name" => "Sustainability"]);

    }
}
