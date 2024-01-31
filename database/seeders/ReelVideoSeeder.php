<?php

namespace Database\Seeders;

use App\Models\ReelVideo;
use Illuminate\Database\Seeder;

class ReelVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReelVideo::factory()->count(100)->create();
    }
}
