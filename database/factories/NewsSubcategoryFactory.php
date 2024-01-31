<?php

namespace Database\Factories;

use App\Models\NewsCategory;
use App\Models\NewsSubcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsSubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsSubcategory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'news_category_id' => NewsCategory::factory(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'show_on_navbar' => $this->faker->boolean(),
            'show_on_page' => $this->faker->boolean(),
        ];
    }
}
