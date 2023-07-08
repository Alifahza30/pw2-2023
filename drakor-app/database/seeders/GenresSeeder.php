<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Romantis',
            'deskripsi' => 'kisah cinta yang direkam dalam media visual untuk disiarkan di bioskop dan televisi yang berfokus pada gairah, emosi, dan keterlibatan',
        ]);

        Genre::create([
            'nama' => 'Thriller',
            'deskripsi' => 'genre film yang berisikan adegan menegangakan.',
        ]);

        Genre::create([
            'nama' => 'Horor',
            'deskripsi' => 'film horor mengambil cerita yang bernuansa menakutkan, membuat orang menjadi terkejut atu menjijikan',
        ]);

        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'yang berisi urutan kronologis peristiwa yang sedang terjadi dalam cerita',
        ]);

        Genre::create([
            'nama' => 'Fantasy',
            'deskripsi' => 'genre yang melibatkan sihir, peristiwa supranatural, mitologi, cerita rakyat, atau dunia-dunia fantasi yang eksotis',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'deskripsi' => 'salah satu jenis dari beragam film yang memiliki poin inti dalam penggarapannya tergantung pada pengembangan esensi unsur cerita dan konflik mendalam pada penekanan karakter realistis yang sering pula mengusung tema emosional.',
        ]);

    }
}
