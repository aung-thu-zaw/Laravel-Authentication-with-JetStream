<?php

namespace Database\Factories;

use App\Models\NewsContent;
use App\Models\NewsSubcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsContent::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'news_subcategory_id' => NewsSubcategory::factory(),
            'author_id' => User::factory(),
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(3, true),
            'type' => $this->faker->randomElement(['article', 'video']),
            'thumbnail' => $this->faker->imageUrl(),
            'video_url' => $this->faker->word(),
            'caption' => $this->faker->word(),
            'reading_time' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
