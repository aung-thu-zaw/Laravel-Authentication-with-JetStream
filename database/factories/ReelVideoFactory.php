<?php

namespace Database\Factories;

use App\Models\ReelVideo;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'thumbnail' => $this->faker->imageUrl(),
            'video_path' => $this->faker->url(),
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'published_at' => $this->faker->dateTime(),
            'view' => $this->faker->numberBetween(1, 10000),
            'is_top' => $this->faker->boolean(),
            'is_editors_pick' => $this->faker->boolean(),
            'topic_id' => Topic::factory(),
            'uploaded_by' => User::factory(),
            'video_by' => $this->faker->name()
        ];
    }
}
