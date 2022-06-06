<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Uzair',
                'email' => 'uzair@gmail.com',
                'role_id' => 1,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Sagheer',
                'email' => 'sagheer@gmail.com',
                'role_id' => 2,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Abdullah',
                'email' => 'abdullah@gmail.com',
                'role_id' => 3,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Inshal',
                'email' => 'inshal@gmail.com',
                'role_id' => 3,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Faizan',
                'email' => 'faizan@gmail.com',
                'role_id' => 3,
                'password' => Hash::make('123456789')
            ]
        ]);
    }
}
