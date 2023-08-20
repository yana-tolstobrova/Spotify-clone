<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $songs = [
            [
                'image' => 'https://www.mondosonoro.com/wp-content/uploads/2020/10/Woodkid-S16-disco.jpg',
                'title' => 'In Your Likeness',
                'author' => 'Woodkid',
                'album' => 'S16',
                'add_time' => '2023-08-18',
                'duration' => '00:05:57',
            ],
            [
                'image' => 'https://m.media-amazon.com/images/I/B190BJ+4wQS._UF350,350_QL50_.jpg',
                'title' => 'HEAVEN',
                'author' => 'The Blaze',
                'album' => 'DANCEHALL',
                'add_time' => '2023-08-18',
                'duration' => '00:03:39',
            ],
            [
                'image' => 'https://upload.wikimedia.org/wikipedia/en/3/33/Kiddo_%28EP%29.jpg',
                'title' => 'Shutter Island',
                'author' => 'Jessie Reyez',
                'album' => 'Kiddo',
                'add_time' => '2023-08-18',
                'duration' => '00:03:07',
            ],
            [
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Xx_album_cover.svg/800px-Xx_album_cover.svg.png',
                'title' => 'Intro',
                'author' => 'The XX',
                'album' => 'xx',
                'add_time' => '2023-08-18',
                'duration' => '00:02:07',
            ],
            [
                'image' => 'https://upload.wikimedia.org/wikipedia/en/c/c0/Mark_Ronson_-_Late_Night_Feelings.png',
                'title' => "Don't Leave Me Lonely (feat. YEBBA)",
                'author' => 'Mark Ronson',
                'album' => 'Late Night Feelings',
                'add_time' => '2023-08-18',
                'duration' => '00:03:36',
            ],
            [
                'image' => 'https://i.discogs.com/MhUW9GazwrHI12oNL-DfeB9hqbjAHMOi8wszpov5W9w/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTE1ODQ4/OTk0LTE1OTg5MTA3/MDUtNTU2NS5qcGVn.jpeg',
                'title' => 'Planet U',
                'author' => 'Mereba',
                'album' => 'The Jungle Is The Only Way Out',
                'add_time' => '2023-08-18',
                'duration' => '00:03:21',
            ],
            [
                'image' => 'https://cdn.shoplightspeed.com/shops/634895/files/21977488/1600x2048x2/jacob-banks-village.jpg',
                'title' => 'Kumbaya (feat Bibi Bourelly)',
                'author' => 'Jacob Banks',
                'album' => 'Village',
                'add_time' => '2023-08-18',
                'duration' => '00:04:01',
            ],
            [
                'image' => 'https://cdn.shoplightspeed.com/shops/634895/files/21977488/1600x2048x2/jacob-banks-village.jpg',
                'title' => 'Slow Up',
                'author' => 'Jacob Banks',
                'album' => 'Village',
                'add_time' => '2023-08-18',
                'duration' => '00:04:57',
            ],
            [
                'image' => 'https://upload.wikimedia.org/wikipedia/en/3/3a/Lykke_Li_-_So_Sad_So_Sexy.png',
                'title' => 'better alone',
                'author' => 'Lykke Li',
                'album' => 'so sad so sexy',
                'add_time' => '2023-08-18',
                'duration' => '00:03:32',
            ],
            [
                'image' => 'https://i.discogs.com/69H4WQzG4UvdDfdbwJyAsbSmOyIAdEM2vtnMNSzRNEk/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTI1OTg3/MzkwLTE2NzU1MTEw/NjctMjEyNi5qcGVn.jpeg',
                'title' => 'We All Knew',
                'author' => 'Labrinth',
                'album' => 'Euphoria',
                'add_time' => '2023-08-18',
                'duration' => '00:03:01',
            ]
        ];

        DB::table('songs')->insert($songs);

    }
}