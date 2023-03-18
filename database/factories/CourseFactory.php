<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $end_course = $this->faker->dateTimeThisMonth();
        $start_course = $this->faker->dateTimeThisMonth($end_course);
        $end_ins = $this->faker->dateTimeThisMonth($start_course);
        $start_ins = $this->faker->dateTimeThisMonth($end_ins);
        $start_hour = rand(8, 10);
        $end_hour = rand(11, 13);

        return [
            'name' => implode(' ', $this->faker->words(2)),
            'description' => $this->faker->text(200),
            'total_price' => $this->faker->randomElement([25, 30, 45, 50]),
            'reserv_price' => $this->faker->boolean() ? $this->faker->randomElement([5, 8, 10]) : null,
            'start_ins' => $start_ins->format(DV),
            'end_ins' => $end_ins->format(DV),
            'start_course' => $start_course->format(DV),
            'end_course' => $end_course->format(DV),
            'duration' => $this->faker->randomNumber(2, true),
            'student_limit' => $this->faker->randomElement([15, 20, 40, 50]),
            'start_hour' => "{$start_hour}:00",
            'end_hour' => "{$end_hour}:00",
            'days' => $this->faker->randomElements(days(), collect([1, 2, 3])->random()),
            'image' => 'img/programacion.jpg',
            'area_id' => Area::all()->random()->id,
            'user_id' => User::where('role', 'instructor')->get()->random()->id,
        ];
    }
}
