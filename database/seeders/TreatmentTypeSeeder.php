<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatment_types')->insert([
            [
                'typeof' => 'Scaling',
                'amount' => '5000'
            ],
            [
                'typeof' => 'Consultaion',
                'amount' => '500'
            ],
            [
                'typeof' => 'Filling',
                'amount' => '3000'
            ],
            [
                'typeof' => 'Extraction',
                'amount' => '8000'
            ],
            [
                'typeof' => 'Braces',
                'amount' => '70000'
            ]
        ]);
    }
}
