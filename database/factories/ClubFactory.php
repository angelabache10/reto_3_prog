<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $end_hour = $this->faker->time();
        $start_hour = $this->faker->time('H:i:s', $end_hour);

        return [
            'name' => implode(' ', $this->faker->words(2)),
            'description' => $this->faker->text(100),
            'image' => 'img/programacion.jpg',
            'day' => $this->faker->randomElement(days()),
            'start_hour' => $start_hour,
            'end_hour' => $end_hour,
            'user_id' => User::where('role', 'Instructor')->get()->random()->id,
        ];
    }
}
