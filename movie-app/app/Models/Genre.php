<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'genre' => 'Comedy',
            'deskripsi' => 'Berisikan cerita yang bisa membuatmu tertawa dan terhibur',
        ],
        [
            'no' => 2,
            'genre' => 'Drama',
            'deskripsi' => 'Berisikan cerita yang berupa konflik dikehidupan sehari-hari',
        ],
        [
            'no' => 3,
            'genre' => 'Action',
            'deskripsi' => 'Berisikan cerita yang mengandung aksi laga dan petarungan yang melibatkan kekuatan fisik',
        ],
        [
            'no' => 4,
            'genre' => 'Romance',
            'deskripsi' => 'Berisikan cerita yang fokus terhadap sebuah cinta atau hubungan tertentu',
        ],
        [
            'no' => 5,
            'genre' => 'Adventure',
            'deskripsi' => 'Berisikan cerita yang berkisahkan petualangan atau penjelajahan ke suatu lokasi atau tempat tertentu'
        ]
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
