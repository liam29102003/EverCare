<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalRecord>
 */
class MedicalRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => $this->faker->numberBetween(1,10),
            'doctor_id' => $this->faker->numberBetween(1,10),
            'disease' => $this->faker->text(50),
            'symptoms' => $this->faker->text(50),
            'weight' => $this->faker->randomNumber(3),
            'blood pressure' => $this->faker->randomNumber(3),
            'status' => $this->faker->randomElement([1, 0]),
            'note' => $this->faker->text(50),
            
        ];
    }
}
