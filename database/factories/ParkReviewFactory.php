<?php

namespace Database\Factories;

use App\Models\ParkReview;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParkReviewFactory extends Factory
{
    protected $model = ParkReview::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'reservation_id' => Reservation::inRandomOrder()->first()?->id ?? Reservation::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->sentence(3),
            'feedback' => $this->faker->sentence(10),
        ];
    }
}

