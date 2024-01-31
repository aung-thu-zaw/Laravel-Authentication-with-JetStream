<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\AlbumPhoto;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumPhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AlbumPhoto::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'album_id' => Album::factory(),
            'image_url' => $this->faker->word(),
            'caption' => $this->faker->text(),
            'owner' => $this->faker->word(),
        ];
    }
}
