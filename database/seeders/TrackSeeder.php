<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Track;
use Faker\Generator as Faker;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $new_track = new Track;
            $new_track->title = $faker->words(3, true);
            $new_track->album = $faker->words(3, true);
            $new_track->author = $faker->firstName($gender = 'male'|'female');
            $new_track->editor = $faker->words(3, true);
            $new_track->length = $faker->time();
            $new_track->save();
        }
    }
}
