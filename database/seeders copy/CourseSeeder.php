<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();

        Course::factory([
            'name' => 'Programación Web',
            'description' => 'Curso de Programación Web con HTML, CSS, JavaScript, PHP, MySQL. Aprende las bases del desarrollo web con este curso básico perfecto para principiantes.',
            'total_price' => 45,
            'reserv_price' => 10,
            'start_ins' => now()->subDays(6),
            'end_ins' => now()->addDays(7),
            'start_course' => now()->addDays(8),
            'end_course' => now()->addDays(28),
            'duration' => 24,
            'student_limit' => 15,
            'start_hour' => '08:00:00',
            'end_hour' => '12:00:00',
            'days' => ['Martes', 'Sábado'],
            'image' => 'img/programacion-web.jpg',
            'area_id' => 1,
            'user_id' => 2,
        ])->create();

        Course::factory([
            'name' => 'JavaScript desde Cero',
            'description' => 'Curso de JavaScript para principiantes en la programación. Aprende uno de los lenguajes mas usados en la actualidad y preparate para ser un desarrollador web.',
            'reserv_price' => null,
            'start_ins' => now()->subDays(6),
            'end_ins' => now()->addDays(7),
            'start_course' => now()->addDays(8),
            'end_course' => now()->addDays(28),
            'duration' => 18,
            'start_hour' => '09:00:00',
            'end_hour' => '12:00:00',
            'days' => ['Martes', 'Jueves'],
            'image' => 'img/javascript.jpg',
            'area_id' => 1,
            'user_id' => 3,
        ])->create();

        Course::factory([
            'name' => 'Administración de Empresas',
            'description' => 'En este curso aprendrás las bases fundamentales de la administración. Potencia tu aprendizaje universitario, y conviértete en un profesional.',
            'start_ins' => now()->subDays(6),
            'end_ins' => now()->addDays(7),
            'start_course' => now()->addDays(8),
            'end_course' => now()->addDays(28),
            'reserv_price' => null,
            'duration' => 18,
            'start_hour' => '09:00:00',
            'end_hour' => '11:00:00',
            'days' => ['Lunes', 'Miércoles', 'Jueves'],
            'image' => 'img/administracion.jpg',
            'area_id' => 1,
            'user_id' => 6,
        ])->create();

        Course::factory([
            'name' => 'Cocina Profesional',
            'description' => 'En este curso de Cocina profesional aprenderás aplicar los procesos asociados en la gastronomía, con el fin de producir platillos de alta calidad. Es fácil de aprender y solo se requiere tener conocimientos elementales.',
            'reserv_price' => 8,
            'start_ins' => now()->subDays(28),
            'end_ins' => now()->subDays(15),
            'start_course' => now()->subDays(14),
            'end_course' => now()->addDays(13),
            'duration' => 8,
            'start_hour' => '14:00:00',
            'end_hour' => '16:00:00',
            'days' => 'Sábado',
            'image' => 'img/cocina.jpg',
            'area_id' => 3,
            'user_id' => 7,
        ])->create();
        
        Course::factory([
            'name' => 'Fundamentos de la Matemática',
            'description' => 'En este curso aprenderás todo lo necesario para aprobar tus asignaturas de matemáticas en tu universidad. Desde los conceptos más básicos hasta ejercicios avanzados, todo explicado hasta el mínimo detalle.',
            'reserv_price' => 5,
            'start_ins' => now()->subDays(35),
            'end_ins' => now()->subDays(22),
            'start_course' => now()->subDays(21),
            'end_course' => now()->subDays(1),
            'duration' => 16,
            'start_hour' => '08:00:00',
            'end_hour' => '12:00:00',
            'days' => 'Sábado',
            'image' => 'img/matematicas.jpg',
            'area_id' => 10,
            'user_id' => 14,
        ])->create();
    }
}
