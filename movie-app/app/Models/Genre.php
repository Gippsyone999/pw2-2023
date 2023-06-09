<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['Nama', 'Deskripsi'];

    public function getAllGenres()
    {
        return $this->genres;
    }
}