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
        NewsSubcategory::factory()->count(5)->create();
    }
}
