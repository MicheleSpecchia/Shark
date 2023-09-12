<?php
namespace Database\Factories;



use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Park;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'park_id' => Park::inRandomOrder()->first()?->id ?? Park::factory(),
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'veicolo' => $this->faker->randomElement(['auto', 'moto', 'camper']),
            // Aggiungi altri campi se necessario
        ];
    }
}
