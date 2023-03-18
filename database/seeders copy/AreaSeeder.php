<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::truncate();

        Area::create([
            'name' => 'Informática',
            'pnf_id' => 7,
        ]);
        
        Area::create([
            'name' => 'Administración',
            'pnf_id' => 2,
        ]);
        
        Area::create([
            'name' => 'Cocina',
            'pnf_id' => 1,
        ]);
        
        Area::create([
            'name' => 'Ofimática',
            'pnf_id' => 7,
        ]);
        
        Area::create([
            'name' => 'Robótica',
            'pnf_id' => 6,
        ]);
        
        Area::create([
            'name' => 'Contaduría',
            'pnf_id' => 4,
        ]);
        
        Area::create([
            'name' => 'Diseño Mecánico',
            'pnf_id' => 10,
        ]);

        Area::create([
            'name' => 'Finanzas',
            'pnf_id' => 2,
        ]);

        Area::create([
            'name' => 'Sistemas Electrónicos',
            'pnf_id' => 6,
        ]);

        Area::create([
            'name' => 'Matemáticas',
            'pnf_id' => 1,
        ]);

        // xD!!
        Area::create([
            'name' => 'Ninjutsu',
            'pnf_id' => 1,
        ]);
    }
}
