<?php

namespace Database\Seeders;

use App\Models\Park;
use App\Models\User;
use Database\Seeders\ParkReviewSeeder;
use Database\Seeders\ReservationSeeder; // Assumendo che tu abbia un seeder per le Reservation.
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'nome' => 'Michele ',
            'cognome' => 'Specchia',
            'email' => 'michele.specchia@edu.unife.it',
            'role'  => '1',
            'indirizzo' => 'Piazzetta Colomba 4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '2389731509'
        ]);

        $user = User::factory()->create([
            'nome' => 'Alessandro',
            'cognome' => 'Notaro',
            'email' => 'alessandro.notaro@edu.unife.it',
            'role'  => '2',
            'indirizzo' => 'Via Piangipane 7',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '9085876012'
        ]);

        $user = User::factory()->create([
            'nome' => 'Riccardp',
            'cognome' => 'Marra',
            'email' => 'riccardo.marra01@edu.unife.it',
            'role'  => '2',
            'indirizzo' => 'Via Piangipane 7',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '9085876012'
        ]);

        $parks = Park::factory(12)->create();
        $this->call(ReservationsTableSeeder::class);
        $this->call(ParkReviewSeeder::class);
    }    
}
