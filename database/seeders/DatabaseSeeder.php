<?php

namespace Database\Seeders;

use App\Models\Season;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $this->call([
            TagSeeder::class,
            CategorySeeder::class,
            EntitySeeder::class,
            SeasonSeeder::class,
            EpisodeSeeder::class
        ]);
    }
}
