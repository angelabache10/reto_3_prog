<?php

namespace Database\Seeders;

use App\Models\MovilCredentials;
use Illuminate\Database\Seeder;

class MovilCredentialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovilCredentials::truncate();

        MovilCredentials::create([
            'phone' => '04XX-XXX-XXXX',
            'bank' => 'Bancoejemplo',
            'ci' => 'V-12.345.678',
        ]);
    }
}
