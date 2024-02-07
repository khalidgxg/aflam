<?php

namespace Database\Factories;

use App\Models\Entity;
use Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\season>
 */
class SeasonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $entities=Entity::all('id')->pluck('id')->toArray();

        return [
            'name'=>$this->faker->name(),
            'date_issue'=>$this->faker->date(),
            'rate'=>$this->faker->numberBetween(1,5),
            'description'=>$this->faker->text(),
            'entity_id'=>Arr::random($entities),
        ];
    }
}
