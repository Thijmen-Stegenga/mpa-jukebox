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

        //Pop Music
        
        Song::create([
            'name' => "One Dance",
            'artist' => 'Drake',
            'duration' => '00:02:54',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/353x353/https%3A%2F%2Fimages.genius.com%2Fb94353bfd9c57fd0cf88677ffb777193.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "iSpy",
            'artist' => 'KYLE',
            'duration' => '00:04:13',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/280x280/https%3A%2F%2Fimages.genius.com%2F99088d2e711b7e087809d30759ab8453.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "I'm the One",
            'artist' => 'DJ Khaled',
            'duration' => '00:04:49',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/400x400/https%3A%2F%2Fimages.genius.com%2F6127733e5dbc43f75fcbf1b92e48a068.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "Fly Me to the Moon",
            'artist' => 'Frank Sinatra',
            'duration' => '00:02:30',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F2eca85ad8e208ea2dc52e02d98b521f5.500x500x1.jpg"
        ]);

        Song::create([
            'name' => "Papaoutai",
            'artist' => 'Stromae',
            'duration' => '00:03:53',
            'genre' => 'Pop',
            'img' => "https://t2.genius.com/unsafe/370x370/https%3A%2F%2Fimages.genius.com%2F1df59c8fca3821998ce28f1c3beb57c4.1000x1000x1.jpg"
        ]);

        // R&B

        Song::create([
            'name' => "In My Head",
            'artist' => 'Lil Tjay',
            'duration' => '00:02:16',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/368x368/https%3A%2F%2Fimages.genius.com%2Fe4d472f767ab1848a19f7cb6a816fb31.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "HeatWaves",
            'artist' => 'Glass Animals',
            'duration' => '00:03:59',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F67abc49ab0c17779c4f63a9e8717cba4.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "Jack Harlow",
            'artist' => 'First Class',
            'duration' => '00:02:54',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/407x407/https%3A%2F%2Fimages.genius.com%2F87249068d05ab2839374c0fdae42da50.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "YNW Melly",
            'artist' => 'Murder on my mind',
            'duration' => '00:04:29',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F6f1babe6dbd99b0fedcb05d612a1ca8a.1000x1000x1.png"
        ]);

        Song::create([
            'name' => "Juice WRLD & XXXTENTACION",
            'artist' => 'Do You Know The Way (Demo)',
            'duration' => '00:02:29',
            'genre' => 'R&B',
            'img' => "https://t2.genius.com/unsafe/409x409/https%3A%2F%2Fimages.genius.com%2F54d4774469c71589df7e8cf17092d407.1000x1000x1.jpg"
        ]);

    }
}
