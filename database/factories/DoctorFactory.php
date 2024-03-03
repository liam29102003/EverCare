<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => $this->faker->phoneNumber,
            'exp'=>$this->faker->numberBetween(1,10),
            'specialization'=>$this->faker->randomElement(['cardiology','dermatology','neurology','orthopedics','gynaecology','oncology','pediatrics','psychiatry','radiology','urology']),
            'qualification'=>$this->faker->text(8),
            'gender'=>$this->faker->randomElement(['male','female']),
            'image'=>'images/profile.PNG',
            'bio'=>$this->faker->paragraph,
            'email_verified_at' => now(),
            'current_team_id' => null,
            'profile_photo_path' => null,
            'remember_token' => Str::random(10),



        ];
    }
}
