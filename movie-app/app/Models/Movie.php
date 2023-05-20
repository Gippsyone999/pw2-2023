<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'F&F Tokyo Drift',
            'poster' => 'image.png',
            'genre' => 'Drama , Action',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'Spiderman 3',
            'poster' => 'image.png',
            'genre' => 'Super Hero, Action',
            'negara' => 'USA',
            'tahun' => 2004,
            'rating' => 9.9,
        ],
        [
            'no' => 3,
            'judul' => 'The Hawk',
            'poster' => 'image.png',
            'genre' => 'War, Action',
            'negara' => 'USA',
            'tahun' => 2018,
            'rating' => 9.8,
        ],
        [
            'no' => 4,
            'judul' => 'Next Friday',
            'poster' => 'image.png',
            'genre' => 'Drama, Comedy',
            'negara' => 'USA',
            'tahun' => 2002,
            'rating' => 10,
        ],
        [
            'no' => 5,
            'judul' => 'Friday',
            'poster' => 'image.png',
            'genre' => 'Drama, Comedy',
            'negara' => 'USA',
            'tahun' => 1998,
            'rating' => 10,
        ]
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
