<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PNF;

class PNFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PNF::truncate();

        $pnfs = [
            'Extensión Universitaria' => 'N/A',
            'Administración' => 'Carlos Administrador',
            'Agroalimentación' => 'Juan Agrónomo',
            'Contaduría Pública' => 'Alberto Contador',
            'Electricidad' => 'Luis Eléctrico',
            'Electrónica' => 'Miguel Electrónico',
            'Informática' => 'Anyerg Martínez',
            'Instrumentación y Control' => 'Bob el Consructor',
            'Mantenimiento' => 'Daniel Mantenedor',
            'Mecánica' => 'Juan Mecánico',
            'Sistemas de Calidad y Ambiente' => 'Pedro Calidrupi',
            'Telecomunicaciones' => 'Wilson Psíquico',
        ];
        
        foreach ($pnfs as $name => $leader) {
            PNF::create([
                'name' => $name,
                'leader' => $leader,
            ]);
        }
    }
}
