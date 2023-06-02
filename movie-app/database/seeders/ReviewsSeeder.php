<?php

namespace Database\Seeders;

use App\Models\review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        review::create([
            'film' => 'Forius Tokyo Drift',
            'user' => 'Han',
            'rating' => 8.8,
            'review' => 'Film yang memperlihatkan ke unikan mobil.',
            'tanggal' => '2021-05-13',
        ]);
        review::create([
            'film' => 'Spiderman Beyond',
            'user' => 'Miles',
            'rating' => 8.6,
            'review' => 'Kemunculan para siperman dari berbagai Universe, menyenangkan sekali.',
            'tanggal' => '2023-06-02',
        ]);
        review::create([
            'film' => 'Midway',
            'user' => 'john',
            'rating' => 8.9,
            'review' => 'Peperangan yg terjadi di masa lampau, sangat dramatis.',
            'tanggal' => '2020-04-18',
        ]);
        review::create([
            'film' => 'Friday',
            'user' => 'Ice Cube',
            'rating' => 9.0,
            'review' => 'Kisah dua sahabat yang sangat di impikan orng lain.',
            'tanggal' => '2021-10-14',
        ]);
        review::create([
            'film' => 'Next Friday',
            'user' => 'Debbo',
            'rating' => 8.0,
            'review' => 'Kelanjutan Friday, kasian sekali si craig.',
            'tanggal' => '2022-03-14',
        ]);
    }
}