<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'Aisyah',
                'email'     => 'aisyah@email.com',
                'role'      => 'administrator',
                'password'  => Hash::make('qwerty'),
            ],
            [
                'name'      => 'Kepet',
                'email'     => 'kepet@email.com',
                'role'      => 'inventory',
                'password'  => Hash::make('qwerty'),
            ],
            [
                'name'      => 'Odek',
                'email'     => 'odek@email.com',
                'role'      => 'kasir',
                'password'  => Hash::make('qwerty'),
            ]
        ];
        

        foreach ($users as $key => $user) {
            DB::table('users')->insert($user);
        }
    }
}
