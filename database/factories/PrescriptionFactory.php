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
            
            'medicine_name' => $this->faker->text(50),
            'dosage' => $this->faker->numberBetween(1,10),
            'frequency' => $this->faker->numberBetween(1,10),
            'duration' => $this->faker->numberBetween(1,10),
            'note' => $this->faker->text(50),
            'buyOrNot'=>$this->faker->randomElement([true,false]),
            'medical_record_id' => $this->faker->numberBetween(1,10),
            'quantity' => $this->faker->numberBetween(1,10),
            'type' => $this->faker->randomElement(['injection', 'liquid','tablet']),



        ];
    }
}
