<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'first_name' => 'Edeblangel',
            'first_lastname' => 'Vanegas',
            'ci' => 14189212,
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04248513236',
            'address' => 'Maracay, Edo. Aragua',
            'email' => 'admin@example.com',
            'password' => 'Admin20.',
            'degree' => 'Coordinador de Vinculación Social',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 1,
            'role' => 'Administrador',
        ]);
        
        User::create([
            'first_name' => 'Elías',
            'first_lastname' => 'Vargas',
            'ci' => 10238923,
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04242921050',
            'address' => 'Maracay, Edo. Aragua',
            'email' => 'teacher@example.com',
            'password' => 'Teacher20.',
            'degree' => 'Ing. en Informática',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 1,
            'role' => 'Instructor',
        ]);       
        
        User::create([
            'first_name' => 'Jackson',
            'first_lastname' => 'Pérez',
            'ci' => 12930202, 
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04140291025',
            'address' => 'Maracay, Edo. Aragua',
            'email' => 'jackson@example.com',
            'password' => 'Password20.',
            'degree' => 'Ing. en Informática',
            'birth' => '1989-05-11',
            'is_upta' => true,
            'area_id' => 1,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Ana',
            'first_lastname' => 'García',
            'ci' => 13242093, 
            'ci_type' => 'V',
            'gender' => 'Femenino',
            'phone' => '04129571023',
            'address' => 'Maracay, Edo. Aragua',
            'email' => 'ana@example.com',
            'password' => 'Password20.',
            'degree' => 'Ing. en Informática',
            'birth' => '1989-03-23',
            'is_upta' => true,
            'area_id' => 1,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Vicente',
            'first_lastname' => 'Sifuentes',
            'ci' => 20183921, 
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04122908312',
            'address' => 'Maracay, Edo. Aragua',
            'email' => 'vicente@example.com',
            'password' => 'Password20.',
            'degree' => 'Ing. en Informática',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 1,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Lucas',
            'first_lastname' => 'Diaz',
            'ci' => 9348192, 
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04122908312',
            'address' => 'Maracay, Edo. Aragua',
            'email' => 'lucas@example.com',
            'password' => 'Password20.',
            'degree' => 'Lic. en Administración',
            'birth' => '1990-01-12',
            'is_upta' => true,
            'area_id' => 2,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Ramón',
            'first_lastname' => 'Rojas',
            'ci' => 14829923, 
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04122908312',
            'address' => 'Cagua, Edo. Aragua',
            'email' => 'ramon@example.com',
            'password' => 'Password20.',
            'degree' => 'Chef Profesional',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 3,
            'role' => 'Instructor',
        ]);       

        
        User::create([
            'first_name' => 'Adelaida',
            'first_lastname' => 'Arias',
            'ci' => 23920122, 
            'ci_type' => 'V',
            'gender' => 'Femenino',
            'phone' => '04122093102',
            'address' => 'Cagua, Edo. Aragua',
            'email' => 'adelaida@example.com',
            'password' => 'Password20.',
            'degree' => 'Asistente de Oficina',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 4,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Héctor',
            'first_lastname' => 'Valenzuela',
            'ci' => 16732132, 
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04162093102',
            'address' => 'Cagua, Edo. Aragua',
            'email' => 'hector@example.com',
            'password' => 'Password20.',
            'degree' => 'Ing. en Electrónica',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 5,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Mario',
            'first_lastname' => 'Lopez',
            'ci' => 8923123, 
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04162093102',
            'address' => 'La Victoria, Edo. Aragua',
            'email' => 'mario@example.com',
            'password' => 'Password20.',
            'degree' => 'Lic. en Contaduría',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 6,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Luisa',
            'first_lastname' => 'Perez',
            'ci' => 24898201, 
            'ci_type' => 'E',
            'gender' => 'Femenino',
            'phone' => '04162093102',
            'address' => 'La Victoria, Edo. Aragua',
            'email' => 'luisa@example.com',
            'password' => 'Password20.',
            'degree' => 'Ing. en Mecánica',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 7,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Lisbeth',
            'first_lastname' => 'Ramirez',
            'ci' => 23102932, 
            'ci_type' => 'V',
            'gender' => 'Femenino',
            'phone' => '04264683102',
            'address' => 'La Victoria, Edo. Aragua',
            'email' => 'lisbeth@example.com',
            'password' => 'Password20.',
            'degree' => 'Lic. en Administración',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 8,
            'role' => 'Instructor',
        ]);       

        User::create([
            'first_name' => 'Dario',
            'first_lastname' => 'Marquez',
            'ci' => 18492002, 
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04128982010',
            'address' => 'La Victoria, Edo. Aragua',
            'email' => 'dario@example.com',
            'password' => 'Password20.',
            'degree' => 'Ing. en Electricidad',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 9,
            'role' => 'Instructor',
        ]);       
        
        User::create([
            'first_name' => 'Yainally',
            'first_lastname' => 'Arriechi',
            'ci' => 19032812, 
            'ci_type' => 'V',
            'gender' => 'Femenino',
            'phone' => '04122093102',
            'address' => 'Maracay, Edo. Aragua',
            'email' => 'yai@example.com',
            'password' => 'Password20.',
            'degree' => 'Lic. en Matemáticas',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 10,
            'role' => 'Instructor',
        ]);

        // xD!!
        User::create([
            'first_name' => 'Kakashi',
            'first_lastname' => 'Hatake',
            'ci' => 77777777, 
            'ci_type' => 'E',
            'gender' => 'Masculino',
            'phone' => '04127777777',
            'address' => 'Konohagakure',
            'email' => 'kakashi@konoha.com',
            'password' => 'Konoha20.',
            'degree' => 'Jonin de Konoha',
            'birth' => '1989-02-10',
            'is_upta' => true,
            'area_id' => 11,
            'role' => 'Instructor',
        ]);

        User::create([
            'first_name' => 'Esteban',
            'second_name' => 'Andrés',
            'first_lastname' => 'Florez',
            'second_lastname' => 'Hernández',
            'ci' => 31342325,
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04128970019',
            'address' => 'Calle 5 de marzo N°30-11, Santa Cruz de Aragua.',
            'email' => 'student@example.com',
            'password' => 'Student20.',
            'grade' => 'Bachillerato',
            'birth' => '2003-07-07',
            'is_upta' => true,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Angélica',
            'second_name' => 'Fabiola',
            'first_lastname' => 'Abache',
            'second_lastname' => 'Adames',
            'ci' => 30081914,
            'ci_type' => 'V',
            'gender' => 'Femenino',
            'phone' => '04163138572',
            'address' => 'Calle Mariño N°30-20, Cagua, Edo. Aragua.',
            'email' => 'angelica@example.com',
            'password' => 'Password20.',
            'grade' => 'Bachillerato',
            'birth' => '2002-10-10',
            'is_upta' => true,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Myriam',
            'second_name' => 'Mariednys',
            'first_lastname' => 'Yaqueno',
            'second_lastname' => 'Romero',
            'ci' => 30039202,
            'ci_type' => 'V',
            'gender' => 'Femenino',
            'phone' => '04163138552',
            'address' => 'Calle de Los Cocos N°20-10, Cagua, Edo. Aragua.',
            'email' => 'myriam@example.com',
            'password' => 'Password20.',
            'grade' => 'Bachillerato',
            'birth' => '2003-09-30',
            'is_upta' => true,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Allan',
            'second_name' => 'Anderson',
            'first_lastname' => 'Gonzalez',
            'second_lastname' => 'Avila',
            'ci' => 30327381,
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04123894213',
            'address' => 'Calle 5 de julio N°20-10, Santa Cruz de Aragua.',
            'email' => 'allan@example.com',
            'password' => 'Password20.',
            'grade' => 'Bachillerato',
            'birth' => '2003-09-30',
            'is_upta' => true,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Saul',
            'second_name' => 'Efrain',
            'first_lastname' => 'Florez',
            'second_lastname' => 'Hernandez',
            'ci' => 25607793,
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04123478901',
            'address' => 'Calle 5 de marzo N°30-11, Santa Cruz de Aragua.',
            'email' => 'saul@example.com',
            'password' => 'Password20.',
            'grade' => 'Superior',
            'birth' => '1996-03-02',
            'is_upta' => false,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Gabriel',
            'second_name' => 'Mauricio',
            'first_lastname' => 'Florez',
            'second_lastname' => 'Hernandez',
            'ci' => 16436508,
            'ci_type' => 'E',
            'gender' => 'Masculino',
            'phone' => '04243864343',
            'address' => 'Calle 5 de marzo N°30-11, Santa Cruz de Aragua.',
            'email' => 'mauro@example.com',
            'password' => 'Password20.',
            'grade' => 'Bachillerato',
            'birth' => '1986-11-11',
            'is_upta' => false,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Laura',
            'second_name' => 'Liseth',
            'first_lastname' => 'Florez',
            'second_lastname' => 'Hernandez',
            'ci' => 18232501,
            'ci_type' => 'V',
            'gender' => 'Femenino',
            'phone' => '04243266043',
            'address' => 'Calle Páez N°30-11, Santa Cruz de Aragua.',
            'email' => 'laura@example.com',
            'password' => 'Password20.',
            'grade' => 'TSU',
            'birth' => '1988-09-27',
            'is_upta' => false,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Katherine',
            'second_name' => 'Andrea',
            'first_lastname' => 'Jiménez',
            'second_lastname' => 'Monsalve',
            'ci' => 31342324,
            'ci_type' => 'V',
            'gender' => 'Femenino',
            'phone' => '04129329021',
            'address' => 'Urb. Corocito Calle 6, Santa Cruz de Aragua.',
            'email' => 'kathalt3@example.com',
            'password' => 'Password20.',
            'grade' => 'Bachillerato',
            'birth' => '2004-07-06',
            'is_upta' => false,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Ricado',
            'second_name' => 'Eduardo',
            'first_lastname' => 'García',
            'second_lastname' => 'Romero',
            'ci' => 30198312,
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04129329032',
            'address' => 'Urb. Corocito Calle 6, Santa Cruz de Aragua.',
            'email' => 'ricardo@example.com',
            'password' => 'Password20.',
            'grade' => 'Bachillerato',
            'birth' => '2003-04-06',
            'is_upta' => false,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Miguel',
            'second_name' => 'Alejandro',
            'first_lastname' => 'García',
            'second_lastname' => 'Romero',
            'ci' => 31902121,
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04129322322',
            'address' => 'Urb. Corocito Calle 6, Santa Cruz de Aragua.',
            'email' => 'miguel@example.com',
            'password' => 'Password20.',
            'grade' => 'TSU',
            'birth' => '2001-02-07',
            'is_upta' => false,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Carlos',
            'second_name' => 'Alejandro',
            'first_lastname' => 'García',
            'second_lastname' => 'Romero',
            'ci' => 31469121,
            'ci_type' => 'E',
            'gender' => 'Masculino',
            'phone' => '04168293829',
            'address' => 'Urb. Corocito Calle 6, Santa Cruz de Aragua.',
            'email' => 'carlos@example.com',
            'password' => 'Password20.',
            'grade' => 'Bachillerato',
            'birth' => '2005-02-12',
            'is_upta' => true,
            'role' => 'Estudiante',
        ]);

        User::create([
            'first_name' => 'Juan',
            'second_name' => 'Daniel',
            'first_lastname' => 'Castillo',
            'second_lastname' => 'Blanco',
            'ci' => 28019231,
            'ci_type' => 'V',
            'gender' => 'Masculino',
            'phone' => '04161523829',
            'address' => 'Urb. Corocito Calle 6, Santa Cruz de Aragua.',
            'email' => 'juan@example.com',
            'password' => 'Password20.',
            'grade' => 'Bachillerato',
            'birth' => '1999-03-12',
            'is_upta' => true,
            'role' => 'Estudiante',
        ]);
    }
}
