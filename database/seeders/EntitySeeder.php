<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Entity;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entity::factory(10)->create()->each(function (Entity $entity) {
            $tags = Tag::all('id')->random(3);
            $entity->tags()->attach($tags);
        });
    }
}
