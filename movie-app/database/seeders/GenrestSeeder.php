<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenrestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'Action-packed mocies',
        ]);

        Genre::create([
            'nama' => 'Comedy',
            'deskripsi' => 'Funny and humor movies',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'deskripsi' => 'Emotional and serious movies',
        ]);
    }
}
