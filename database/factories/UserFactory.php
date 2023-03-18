<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Area;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'second_name' => $this->faker->firstName,
            'first_lastname' => $this->faker->lastName,
            'second_lastname' => $this->faker->lastName,
            'ci' => $this->faker->randomNumber(8, true),
            'gender' => $this->faker->randomElement(genders()),
            'birth' => $this->faker->date(),
            'phone' => randomNumericString(11),
            'address' => $this->faker->address,
            'grade' => $this->faker->randomElement(grades()),
            'is_upta' => $this->faker->boolean(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'degree' => $this->faker->jobTitle,
            'area_id' => Area::factory(),
            'role' => $this->faker->randomElement(roles()),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
