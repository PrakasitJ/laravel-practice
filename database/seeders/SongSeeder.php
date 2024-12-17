<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    public function run() : void
    {
        Song::create([
            'title' => 'River',
            'artist' => 'Miley Cyrus',
            'album' => 'Endless Summer Vocation',
            'minutes' => 3,
            'seconds' => 20
        ]);

        Song::create([
            'title' => 'Song for You',
            'artist' => 'Lee Isaacs',
            'album' => 'After the Apocalypses',
            'minutes' => 2,
            'seconds' => 48
        ]);

        Song::create([
            'title' => "คำถามซึ่งไร้คนตอบ",
            'artist' => 'Getsunova',
            'album' => 'The First Album',
            'minutes' => 4,
            'seconds' => 29
        ]);

        Song::create([
            'title' => "Starry Jet",
            'artist' => 'Hoshimachi Suisei',
            'album' => 'Still Still Stella',
            'minutes' => 4,
            'seconds' => 10
        ]);
    }
}
