<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsCategory::factory()->create(["name" => "World"]);
        NewsCategory::factory()->create(["name" => "Business"]);
        NewsCategory::factory()->create(["name" => "Markets"]);
        NewsCategory::factory()->create(["name" => "Health"]);
        NewsCategory::factory()->create(["name" => "Entertainment"]);
        NewsCategory::factory()->create(["name" => "Tech"]);
        NewsCategory::factory()->create(["name" => "Travel"]);
        NewsCategory::factory()->create(["name" => "Sports"]);
        NewsCategory::factory()->create(["name" => "Style"]);
        NewsCategory::factory()->create(["name" => "Politics"]);
        NewsCategory::factory()->create(["name" => "E-Sports"]);
    }
}
