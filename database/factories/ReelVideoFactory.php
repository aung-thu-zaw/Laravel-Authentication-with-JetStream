<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ReelVideo;
use App\Models\Topic;

class ReelVideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReelVideo::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'thumbnail' => $this->faker->word(),
            'video_url' => $this->faker->word(),
            'status' => $this->faker->randomElement(["draft","published","archived"]),
            'published_at' => $this->faker->dateTime(),
            'view' => $this->faker->numberBetween(-10000, 10000),
            'is_top' => $this->faker->boolean(),
            'is_editors_pick' => $this->faker->boolean(),
            'topic_id' => Topic::factory(),
        ];
    }
}
