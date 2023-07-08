<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenresSeeder::class,
            MoviesSeeder::class,
            CountriesSeeder::class,
            UsersSeeder::class,
            ReviewsSeeder::class,
        ]);
    }
}
