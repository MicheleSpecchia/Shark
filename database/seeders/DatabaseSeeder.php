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
            'email' => 'michele@gmail.com',
            'role'  => '1',
            'indirizzo' => 'Via Capretta Felice 1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '2389731509'
        ]);

        $user = User::factory()->create([
            'nome' => 'Luca',
            'cognome' => 'Faccio',
            'email' => 'lucafaccio@gmail.com',
            'role'  => '2',
            'indirizzo' => 'Via Capretta Triste 1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '9085876012'
        ]);

        $parks = Park::factory(12)->create();

        // Assumendo che tu abbia un ReservationSeeder per generare le prenotazioni
        $this->call(ReservationsTableSeeder::class);

        // Ora che hai utenti, parchi e prenotazioni, genera le recensioni dei parchi
        $this->call(ParkReviewSeeder::class);
    }    
}
