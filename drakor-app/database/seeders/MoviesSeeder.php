<?php

namespace Database\Seeders;

use App\Models\Countrie;
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
            'title' => 'Move to Heaven',
            'poster' => 'image.png',
            'genre_id' => '6',
            'synopsis' => ' berkisah tentang Gae Ru (Tang Jung Sang), seorang remaja yang memiliki sindrom Asperger yang bekerja sendiri menjadi pembersih trauma setelah ditinggal ayahnya, Jeong U (Ji Jin Hee) yang meninggal karena sakit.',
            'release_date' => '2021-05-14',
            'countries_id' => 1,
            'rating' => 9.2,
        ]);

        Movie::create([
            'title' => 'The Glory 2',
            'poster' => 'image.png',
            'genre_id' => '2',
            'synopsis' => 'bercerita tentang aksi pembalasan dendam yang akan dilakukan oleh Moon Dong Eun (Song Hye Kyo), yang sudah direncanakan sejak lama.',
            'release_date' => '2023-03-10',
            'countries_id' => '1',
            'rating' => 9.0,
        ]);

        Movie::create([
            'title' => 'Taxi Driver 2',
            'poster' => 'image.png',
            'genre_id' => '4',
            'synopsis' => 'menceritakan tentang Taksi Pelangi yang kembali beroperasi setelah balas dendam Do Gi berhasil.',
            'release_date' => '2023-04-15',
            'countries_id' => '1',
            'rating' => 8.9,
        ]);

        Movie::create([
            'title' => 'Twenty-Five Twenty-One',
            'poster' => 'image.png',
            'genre_id' => '1',
            'synopsis' => 'Drakor ini bercerita pada latar krisis IMF Korea Selatan di tahun 1998. Pada saat itu Baek Yi Jin (Nam Joo Hyuk) harus melakukan kerja paruh waktu untuk menyambung kehidupannya. Semenjak krisis ekonomi tersebut, keluarga Baek Yi Jin mengalami keterpurukan.',
            'release_date' => '2022-02-12',
            'countries_id' => '1',
            'rating' => 8.8,
        ]);

        Movie::create([
            'title' => 'The Guest',
            'poster' => 'image.png',
            'genre_id' => '3',
            'synopsis' => 'bercerita mengenai Yoon Hwa Pyung, seorang pria sekaligus dukun yang memiliki kemampuan khusus untuk bisa merasakan kehadirian roh jahat.',
            'release_date' => '2018-09-12',
            'countries_id' => '1',
            'rating' => 8.7,
        ]);

        Movie::create([
            'title' => 'Tunnel',
            'poster' => 'image.png',
            'genre_id' => '5',
            'synopsis' => 'mengisahkan tentang kecelakaan yang menimpa Lee Jung Soo. Berawal saat, Jung Soo sedang dalam perjalanan pulang menemui putrinya yang sedang berulang tahun. Hal yang tak terduga terjadi. Saat melewati sebuah terowongan yang melintasi gunung, tiba-tiba terowongan itu runtuh.',
            'release_date' => '2017-03-25',
            'countries_id' => '1',
            'rating' => 8.6,
        ]);
    }
}
