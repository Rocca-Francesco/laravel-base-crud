<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Track;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_track = new Track;
        $new_track->title = 'Numb';
        $new_track->album = 'Meteora';
        $new_track->author = 'Linkin Park';
        $new_track->editor = 'Warner Records';
        $new_track->length = '03:05:03';
        $new_track->poster = 'https://images.genius.com/96b71b235c8bd246a46d75deba3ac149.1000x960x1.jpg';
        $new_track->save();
    }
}
