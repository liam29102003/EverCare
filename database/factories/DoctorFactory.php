<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail,
            'password' => md5('EverCareDoctor'),
            'phone' => $this->faker->phoneNumber,
            'exp'=>$this->faker->numberBetween(1,10),
            'speciality'=>$this->faker->randomElement(['cardiology','dermatology','neurology','orthopedics','gynaecology','oncology','pediatrics','psychiatry','radiology','urology']),
            'qualification'=>$this->faker->text(8),
            'gender'=>$this->faker->randomElement(['male','female']),
            'image'=>'images/profile.PNG',
            'bio'=>$this->faker->paragraph,

        ];
    }
}
