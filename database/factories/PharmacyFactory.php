<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacy>
 */
class PharmacyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'quantity' => $this->faker->randomNumber(4),
            'price' => $this->faker->randomNumber(4),
            'image' => 'images/depositphotos_1097789-stock-photo-lot-of-medicines.jpg',
            'description' => $this->faker->text(50),
            'manufacturer' => $this->faker->name,
            'side' => $this->faker->name,
            
        ];
    }
}
