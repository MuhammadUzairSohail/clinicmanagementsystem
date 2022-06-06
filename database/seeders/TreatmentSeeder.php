<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert([
            [
                'user_id' => 2,
                'treatment_date' => now(),
                'typeof_id' => '1',
                'description' => 'Routine Checkup'
            ],
            [
                'user_id' => 2,
                'treatment_date' => now(),
                'typeof_id' => '2',
                'description' => 'Consultancy'
            ],
            [
                'user_id' => 3,
                'treatment_date' => now(),
                'typeof_id' => '3',
                'description' => 'Routine Checkup'
            ],
            [
                'user_id' => 3,
                'treatment_date' => now(),
                'typeof_id' => '4',
                'description' => 'Consultancy'
            ],
            [
                'user_id' => 4,
                'treatment_date' => now(),
                'typeof_id' => '5',
                'description' => 'Routine Checkup'
            ],
            [
                'user_id' => 4,
                'treatment_date' => now(),
                'typeof_id' => '1',
                'description' => 'Consultancy'
            ],
            [
                'user_id' => 5,
                'treatment_date' => now(),
                'typeof_id' => '2',
                'description' => 'Routine Checkup'
            ],
            [
                'user_id' => 5,
                'treatment_date' => now(),
                'typeof_id' => '3',
                'description' => 'Consultancy'
            ],
            [
                'user_id' => 2,
                'treatment_date' => now(),
                'typeof_id' => '4',
                'description' => 'Routine Checkup'
            ],
            [
                'user_id' => 3,
                'treatment_date' => now(),
                'typeof_id' => '5',
                'description' => 'Consultancy'
            ]
        ]);
    }
}
