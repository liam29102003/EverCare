<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescription>
 */
class PrescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => $this->faker->randomNumber(8),
            'doctor_id' => $this->faker->randomNumber(8),
            'medicine_name' => $this->faker->text(50),
            'dosage' => $this->faker->text(50),
            'frequency' => $this->faker->text(50),
            'duration' => $this->faker->text(50),
            'note' => $this->faker->text(50),
            'buyOrNot'=>$this->faker->randomElement([true,false]),
            'status' => $this->faker->randomElement([true, false]),
            'medical_record_id' => $this->faker->randomNumber(8),
            'quantity' => $this->faker->randomNumber(8),
            'type' => $this->faker->randomElement(['injection', 'liquid','tablet']),



        ];
    }
}
