<?php

namespace Database\Factories;

use App\Models\Season;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $seasons=Season::all('id')->pluck('id')->toArray();
        $qualities=['4k','2k','FUL-HD','HD','360p'];
        return [
            'name'=>$this->faker->name(),
            'quality'=>array_rand($qualities),
            'season_id'=>Arr::random($seasons)

        ];
    }
}
