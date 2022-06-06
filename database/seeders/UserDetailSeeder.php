<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_details')->insert([
            [
                'user_id' => 1,
                'care_of' => 'Sohail',
                'age' => 24,
                'gender' => 'Male',
                'address' => 'Airport',
                'mobile_number' => '03360837433',
                'phone_number' => '02134967901'
            ],
            [

                'user_id' => 2,
                'care_of' => 'Zardari',
                'age' => 27,
                'gender' => 'Male',
                'address' => 'Hyderabad',
                'mobile_number' => '03211321312',
                'phone_number' => '02123213131'
            ], [
                'user_id' => 3,
                'care_of' => 'Manzoor',
                'age' => 34,
                'gender' => 'Male',
                'address' => 'Defence',
                'mobile_number' => '03360837433',
                'phone_number' => '02134967901'
            ],
            [

                'user_id' => 4,
                'care_of' => 'Baig Sahab',
                'age' => 27,
                'gender' => 'Male',
                'address' => 'Malir',
                'mobile_number' => '03211321312',
                'phone_number' => '02123213131'
            ],
            [
                'user_id' => 5,
                'care_of' => 'Khoobsurat',
                'age' => 27,
                'gender' => 'Male',
                'address' => 'Saddar',
                'mobile_number' => '03360837433',
                'phone_number' => '02134967901'
            ]
        ]);
    }
}
