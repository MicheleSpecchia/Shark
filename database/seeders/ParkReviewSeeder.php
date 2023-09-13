<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Park;
use App\Models\ParkReview;


class ParkReviewSeeder extends Seeder
{
    public function run()
    {
        // Per ogni parcheggio, crea un numero casuale di recensioni
        Park::all()->each(function ($park) {
            ParkReview::factory(rand(1, 10))->create([
                'park_id' => $park->id,
                // Se le recensioni sono associate anche agli utenti, puoi assegnare un 'user_id' qui
            ]);
        });
    }
}

