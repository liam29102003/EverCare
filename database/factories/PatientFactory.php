<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->name(),
           'email' => $this->faker->unique()->safeEmail(),
           'phone' => $this->faker->phoneNumber(),
           'dob' => $this->faker->date(),
           'gender' => $this->faker->randomElement(['male', 'female']),
           'address' => $this->faker->address(),
        //    'bloodType' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
        //    'type' => $this->faker->randomElement(['in-person', 'online']),
           
        ];
    }
}
