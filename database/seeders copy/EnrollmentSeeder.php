<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enrollment;
use App\Models\User;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enrollment::truncate();

        $students = User::where('role', 'Estudiante')->get()->skip(1);
        
        // Curso en inscripciones
        $students->take(14)
            ->each(function ($s) {
                Enrollment::create([
                    'user_id' => $s->id,
                    'course_id' => 1,
                    'mode' => modes()->random(),
                ]);
            });
        
        $students->take(11)
            ->each(function ($s, $i) {
                Enrollment::create([
                    'user_id' => $s->id,
                    'course_id' => 2,
                    'created_at' => now(),
                    'mode' => 'Un solo pago',
                ]);
            });

        // Curso activo
        $students->take(12)
            ->each(function ($s, $i) {
                Enrollment::create([
                    'user_id' => $s->id,
                    'course_id' => 4,
                    // Estudiante no confirmado a proposito para probar lo de enrollments:unconfirmed
                    'confirmed_at' => $i === 1 ? null : now()->subDays(1),
                    'mode' => modes()->random(),
                ]);
            });
        
        // Curso finalizado
        $students->take(12)
            ->each(function ($s) {
                Enrollment::create([
                    'user_id' => $s->id,
                    'course_id' => 5,
                    'confirmed_at' => now()->subDays(1),
                    'mode' => modes()->random(),
                    'approval' => $s->id === 17 ? 'Aprobado' : 'Por decidir',
                ]);
            });
    }
}
