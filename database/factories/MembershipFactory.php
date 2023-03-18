<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'club_id' => Club::get()->random()->id,
            'user_id' => User::where('role', 'Estudiante')->get()->random()->id,
        ];
    }
}
