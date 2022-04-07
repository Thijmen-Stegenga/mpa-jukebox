<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Rap music 
        Song::create([
            'name' => "Starlight",
            'artist' => 'Dave',
            'duration' => '00:03:32',
            'genre' => 'Rap',
            'img' => "https://t2.genius.com/unsafe/321x321/https%3A%2F%2Fimages.genius.com%2F47fc59b89a516d78bab34c36a354d50f.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "In My Head",
            'artist' => 'Lil Tjay',
            'duration' => '00:02:16',
            'genre' => 'Rap',
            'img' => "https://t2.genius.com/unsafe/368x368/https%3A%2F%2Fimages.genius.com%2Fe4d472f767ab1848a19f7cb6a816fb31.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "XO TOUR Llif3",
            'artist' => 'Lil Uzi Vert',
            'duration' => '00:03:03',
            'genre' => 'Rap',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2Ffb92d6ae51794dfd11016f43a3678399.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "God's Plan",
            'artist' => 'Drake',
            'duration' => '00:03:16',
            'genre' => 'Rap',
            'img' => "https://t2.genius.com/unsafe/349x349/https%3A%2F%2Fimages.genius.com%2Fae0cd04ff9417b23861f674772ded07f.1000x1000x1.jpg"
        ]);

        Song::create([
            'name' => "SAD!",
            'artist' => 'XXXTENTACION',
            'duration' => '00:02:47',
            'genre' => 'Rap',
            'img' => "https://t2.genius.com/unsafe/399x399/https%3A%2F%2Fimages.genius.com%2F8b673f80818e4cc1b975e8d8cd81344c.1000x1000x1.png"
        ]);
        
    }
}
