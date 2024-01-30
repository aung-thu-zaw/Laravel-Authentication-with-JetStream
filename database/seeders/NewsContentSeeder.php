<?php

namespace Database\Seeders;

use App\Models\NewsContent;
use Illuminate\Database\Seeder;

class NewsContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsContent::factory()->count(5)->create();
    }
}
