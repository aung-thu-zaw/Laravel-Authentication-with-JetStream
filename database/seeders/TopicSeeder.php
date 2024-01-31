<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topic::factory()->create(["name"=>"Politics"]);
        Topic::factory()->create(["name"=>"Technology"]);
        Topic::factory()->create(["name"=>"Science"]);
        Topic::factory()->create(["name"=>"Health"]);
        Topic::factory()->create(["name"=>"Business"]);
        Topic::factory()->create(["name"=>"Entertainment"]);
        Topic::factory()->create(["name"=>"Sports"]);
        Topic::factory()->create(["name"=>"Environment"]);
        Topic::factory()->create(["name"=>"Education"]);
        Topic::factory()->create(["name"=>"International"]);
        Topic::factory()->create(["name"=>"Economy"]);
        Topic::factory()->create(["name"=>"Lifestyle"]);
        Topic::factory()->create(["name"=>"Travel"]);
        Topic::factory()->create(["name"=>"Fashion"]);
        Topic::factory()->create(["name"=>"Food"]);
        Topic::factory()->create(["name"=>"Music"]);
        Topic::factory()->create(["name"=>"Movies"]);
        Topic::factory()->create(["name"=>"Art"]);
        Topic::factory()->create(["name"=>"Gaming"]);
        Topic::factory()->create(["name"=>"Opinion"]);
    }
}
