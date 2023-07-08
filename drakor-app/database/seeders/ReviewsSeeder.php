<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movies_id' => '1',
            'users_id' => '1',
            'date' => '2022-08-13' ,
            'deskripsi' => 'Sangat Dramatis',
            'rating' => 9.2 ,
        ]);

        Review::create([
            'movies_id' => '2',
            'users_id' => '2',
            'date' => '2022-07-29' ,
            'deskripsi' => 'Balas dendam yang keren',
            'rating' => 9.0 ,
        ]);

        Review::create([
            'movies_id' => '3',
            'users_id' => '3',
            'date' => '2023-08-16' ,
            'deskripsi' => 'Sangat bagus, dan menegangkan',
            'rating' => 8.9 ,
        ]);

        Review::create([
            'movies_id' => '4',
            'users_id' => '4',
            'date' => '2023-01-27' ,
            'deskripsi' => 'Drama romatis yang sedih',
            'rating' => 8.8 ,
        ]);

        Review::create([
            'movies_id' => '5',
            'users_id' => '5',
            'date' => '2022-07-09' ,
            'deskripsi' => 'Sangat menyeramkan',
            'rating' => 8.7 ,
        ]);

        Review::create([
            'movies_id' => '6',
            'users_id' => '6',
            'date' => '2023-03-05' ,
            'deskripsi' => 'Sangat menegangkan dan plotwist',
            'rating' => 8.6 ,
        ]);
    }
}
