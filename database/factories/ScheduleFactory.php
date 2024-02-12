<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacy>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day' => $this->faker->randomElement(['mon','tue','wed','thurs','fri']),
            'to' => $this->faker->randomNumber(1),
            'from' => $this->faker->randomNumber(1),
            'doctor_id' => $this->faker->randomNumber(4), 
        ];
    }
}
