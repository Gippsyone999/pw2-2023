<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $fillable = ['film', 'user', 'rating', 'review', 'tanggal'];
    
       public function getAllReviews()
       {
        return $this -> reviews;
       }
}
