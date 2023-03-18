<?php

namespace Database\Seeders;

use App\Models\TransferCredentials;
use Illuminate\Database\Seeder;

class TransferCredentialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransferCredentials::truncate();

        TransferCredentials::create([
            'bank' => 'Bancoejemplo',
            'ci' => 'V-12.345.678',
            'name' => 'Edeblangel Vanegas',
            'type' => 'Corriente',
            'account' => '15489623578451963258',
        ]);
    }
}
