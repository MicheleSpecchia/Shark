<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Park;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Michele Specchia',
            'email' => 'michele@gmail.com',
            'role'  => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '2389731509'
        ]);

        $user = User::factory()->create([
            'name' => 'Luca Faccio',
            'email' => 'lucafaccio90@gmail.com',
            'role'  => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '9085876012'
        ]);

        $user = User::factory()->create([
            'name' => 'Simone Torto',
            'email' => 'simo0@gmail.com',
            'role'  => '3',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '7512367855'
        ]);

    }
    
}