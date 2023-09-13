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
            'address' => $this ->faker ->address(),
            'cap' => $this ->faker ->postcode(),
            'location' => $this ->faker ->city(),
            'stars' => $this ->faker ->numberBetween(1,5),
            'price' => $this ->faker ->numberBetween(1,2),
            'description' => $this ->faker ->paragraph(5),
            'automobili' => '1',
            'motocicli'  => '1',
            'camper'    => '0',
        ];
    }
}
