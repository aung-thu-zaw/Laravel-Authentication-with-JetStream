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
        NewsTag::factory()->count(5)->create();
    }
}
