<?php

namespace Database\Seeders;

use App\Models\AlbumPhoto;
use Illuminate\Database\Seeder;

class AlbumPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlbumPhoto::factory()->count(5)->create();
    }
}
