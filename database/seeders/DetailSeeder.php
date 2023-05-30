<?php

namespace Database\Seeders;

use App\Models\Detail;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailSeeder extends Seeder
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

        for ($i=1; $i < 11; $i++) {
            Detail::create([
                'post_id' => $i,
                'author' => $faker->name(),
                'content' => $faker->paragraphs( $max = 6,  '<br/>\n')
            ]);
        };
    }
}
