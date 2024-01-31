<?php

namespace Database\Factories;

use App\Models\NewsTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsTag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
        ];
    }
}
