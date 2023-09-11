<?php

namespace Database\Factories;

use App\Models\ParkReview;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ParkReviewFactory extends Factory
{
    protected $model = ParkReview::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'feedback' => $this->faker->sentence(10),
        ];
    }
}
