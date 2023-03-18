<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Club::truncate();

        Club::factory([
            'name' => 'Futbol',
            'description' => 'El siguiente club tiene como fin único la práctica de fútbol. Aprende las bases y desarrolla tus habilidades en esta área.',
            'day' => 'Lunes',
            'start_hour' => '08:00:00',
            'end_hour' => '12:00:00',
            'image' => 'img/futbol.jpg',
            'user_id' => 2,
        ])->create();
        
        Club::factory([
            'name' => 'Voleibol',
            'description' => 'El siguiente club tiene como fin único la práctica del voleibol. Aprende las bases y desarrolla tus habilidades en esta área.',
            'day' => 'Viernes',
            'start_hour' => '08:00:00',
            'end_hour' => '12:00:00',
            'image' => 'img/voleibol.jpg',
            'user_id' => 2,
        ])->create();

        Club::factory([
            'name' => 'Baloncesto',
            'description' => 'El siguiente club tiene como fin único la práctica del baloncesto. Aprende las bases y desarrolla tus habilidades en esta área.',
            'day' => 'Miércoles',
            'start_hour' => '08:00:00',
            'end_hour' => '11:00:00',
            'image' => 'img/baloncesto.jpg',
            'user_id' => 4,
        ])->create();

        Club::factory([
            'name' => 'Beisbol',
            'description' => 'El siguiente club tiene como fin único la práctica del beisbol. Aprende las bases y desarrolla tus habilidades en esta área.',
            'day' => 'Miércoles',
            'start_hour' => '08:00:00',
            'end_hour' => '12:00:00',
            'image' => 'img/beisbol.jpg',
            'user_id' => 4,
        ])->create();

        Club::factory([
            'name' => 'Salsa',
            'description' => 'En este curso aprenderas a bailar salsa desde sus pasos básicos hasta movimientos que te harán todo un experto, únete y diviertete bailando.',
            'day' => 'Jueves',
            'start_hour' => '10:00:00',
            'end_hour' => '12:00:00',
            'image' => 'img/salsa.jpg',
            'user_id' => 2,
        ])->create();
    }
}
