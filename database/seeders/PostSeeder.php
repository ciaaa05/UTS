<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) {
            Post::create([
                'title' => $faker->sentence(),
                'subtitle' => $faker->sentence(3),
                'date' => $faker->dateTime($max = 'now', $timezone = null),
                'like' => $faker->numberBetween(0, 1500),
                'image' => $faker->imageUrl(320, 200, 'books', true),
                'description' =>$faker->sentence(10),
            ]);
        };
    }
}
