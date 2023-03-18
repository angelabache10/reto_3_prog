<?php

namespace Database\Seeders;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membership::truncate();
        
        $members = User::where('role', 'Estudiante')->get()->skip(1);

        $members->take(6)
            ->each(function ($s) {
                Membership::create([
                    'user_id' => $s->id,
                    'club_id' => 1,
                ]);
            });

        $members->take(4)
            ->each(function ($s) {
                Membership::create([
                    'user_id' => $s->id,
                    'club_id' => 2,
                ]);
            });


        $members->take(10)
            ->each(function ($s) {
                Membership::create([
                    'user_id' => $s->id,
                    'club_id' => 3,
                ]);
            });
            
        $members->take(5)
            ->each(function ($s) {
                Membership::create([
                    'user_id' => $s->id,
                    'club_id' => 4,
                ]);
            });
        
        $members->take(8)
            ->each(function ($s) {
                Membership::create([
                    'user_id' => $s->id,
                    'club_id' => 5,
                ]);
            });
    }
}
