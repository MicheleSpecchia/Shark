<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => '2',
            'address' => $this->faker->address(),
            'cap' => $this->faker->postcode(),
            'location' => 'Ferrara',
            'stars' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->paragraph(1),
            'automobili' => '1',
            'motocicli'  => '1',
            'camper'    => '0',
            'camere' => $this->faker->numberBetween(0, 1),
            'tastierino' => $this->faker->numberBetween(0, 1),
            'aperto' => $this->faker->numberBetween(0, 1),
            'chiuso' => $this->faker->numberBetween(0, 1),
            'totem' => $this->faker->numberBetween(0, 1),
            'privato' => $this->faker->numberBetween(0, 1),
            'scambio' => 0,
            'shark' => 1,
            'price' => $this->faker->numberBetween(1, 2),
        ];
    }
}
