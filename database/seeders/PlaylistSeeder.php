<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Playlist::factory()->create(["title"=>"Top Headlines Express"]);
        Playlist::factory()->create(["title"=>"Quick Bites: News Edition"]);
        Playlist::factory()->create(["title"=>"Viral News Reels"]);
        Playlist::factory()->create(["title"=>"News in 60 Seconds"]);
        Playlist::factory()->create(["title"=>"Reel Insights"]);
        Playlist::factory()->create(["title"=>"Daily Digest Reels"]);
        Playlist::factory()->create(["title"=>"Breaking Moments"]);
        Playlist::factory()->create(["title"=>"Trending Topics Unleashed"]);
        Playlist::factory()->create(["title"=>"Snackable Stories"]);
        Playlist::factory()->create(["title"=>"NewsFlash Reels"]);
        Playlist::factory()->create(["title"=>"Snapshot Stories"]);
        Playlist::factory()->create(["title"=>"Express Edits"]);
        Playlist::factory()->create(["title"=>"News on the Go"]);
        Playlist::factory()->create(["title"=>"Fast Forward Facts"]);
        Playlist::factory()->create(["title"=>"Quick Hits & Highlights"]);
        Playlist::factory()->create(["title"=>"Reel Roundup"]);
        Playlist::factory()->create(["title"=>"In a Nutshell News"]);
        Playlist::factory()->create(["title"=>"Hot Takes in Motion"]);
        Playlist::factory()->create(["title"=>"Now Showing: News Edition"]);
        Playlist::factory()->create(["title"=>"Rapid Recaps"]);
    }
}
