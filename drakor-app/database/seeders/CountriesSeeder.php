<?php

namespace Database\Seeders;

use App\Models\Countrie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Countrie::create([
            'nama' => 'Korea Selatan',
        ]);
    }
}
