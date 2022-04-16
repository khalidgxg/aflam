<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Season;
use Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entity>
 */
class EntityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories=Category::all('id')->pluck('id')->toArray();
        return [
            'name'=> $this->faker->name(),
            'language'=> $this->faker->languageCode(),
            'category_id'=>Arr::random($categories),

        ];
    }
}
