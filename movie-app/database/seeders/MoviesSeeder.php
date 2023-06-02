<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'Fast and Forius Tokyo Drift',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'USA',
            'tahun' => 2006,
            'rating' => 9.8,

        ]);

        Movie::create([
            'judul' => 'Spiderman 3',
            'poster' => 'image.png',
            'genre_id' => 2,
            'negara' => 'USA',
            'tahun' => 2002,
            'rating' => 9.8,

        ]);

        Movie::create([
            'judul' => 'Midway',
            'poster' => 'image.png',
            'genre_id' => 3,
            'negara' => 'USA',
            'tahun' => 2002,
            'rating' => 9.8,

        ]);

    }
}
