<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'film' => 'The F&F Tokyo Drift',
            'user' => 'Fakhirul',
            'rating' => '8,7',
            'reviews' => 'This movie is a masterpice',
            'tanggal' => 2022-03-12,
        ],
        [
            'no' => 2,
            'film' => 'Spiderman 3',
            'user' => 'Sidiq',
            'rating' => '8,9',
            'reviews' => 'Wow this movie is awesome',
            'tanggal' => 2022-04-13,
        ],
        [
            'no' => 3,
            'film' => 'The Hawk',
            'user' => 'Ishaq',
            'rating' => '8,9',
            'reviews' => 'I like this movie',
            'tanggal' => 2022-04-14,
        ],
        [
            'no' => 4,
            'film' => 'Next Friday',
            'user' => 'Fikri',
            'rating' => '8,9',
            'reviews' => 'This movie is good 100%',
            'tanggal' => 2022-05-15,
        ],
        [
            'no' => 5,
            'film' => 'Friday',
            'user' => 'Ghifari',
            'rating' => '8,9',
            'reviews' => 'Wow this movie a masterpice at 1990',
            'tanggal' => 2022-06-16,
        ]
    ];

    public function getAllreviews()
    {
        return $this->reviews;
    }
}
