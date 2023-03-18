<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\User;

class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $course = Course::get(['id', 'reserv_price'])->random();

        return [
            'course_id' => $course->id,
            'user_id' => User::where('role', 'Estudiante')->get()->random()->id,
            'mode' => $course->reserv_price ?? false ? modes()->random() : 'Reservación',
        ];
    }
}
