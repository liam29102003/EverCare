<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'role' => $this->faker->randomElement(['nurse', 'janitor', 'security', 'receptionist', /* add more roles as needed */]),
            'dob'=>$this->faker->date(),
            'gender'=>$this->faker->randomElement(['male', 'female']),
            'image'=>'images/profile.PNG',
            'qualification'=>$this->faker->text(),
            'note'=>$this->faker->text(),
            'salary' => $this->faker->randomNumber(5),
            'password'=>md5('EvercareStaff'),

    ];
    }
}
