<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
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
            'address' => $this ->faker ->address(),
            'cap' => $this ->faker ->postcode(),
            'location' => $this ->faker ->city(),
            'civico' => $this ->faker ->numberBetween(1,100),
            'description' => $this ->faker ->paragraph(5)
        ];
    }
}
