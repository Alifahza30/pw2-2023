<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Andri',
            'email' => 'Andri@gmail.com',
            'password' => 'Andri123',
            'role' => 'User',
        ]);

        User::create([
            'name' => 'Alifah',
            'email' => 'Alifah@gmail.com',
            'password' => 'Alifah123',
            'role' => 'User',
        ]);

        User::create([
            'name' => 'Hana',
            'email' => 'Hana@gmail.com',
            'password' => 'Hana123',
            'role' => 'User',
        ]);
    }
}
