<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            [
                'user_id' => 2,
                'booking_date' => now(),
                'appointment_type' => 'Checkup',
                'appointment_date' => now()
            ],
            [
                'user_id' => 3,
                'booking_date' => now(),
                'appointment_type' => 'Chit-Chat',
                'appointment_date' => now()
            ],
            [
                'user_id' => 3,
                'booking_date' => now(),
                'appointment_type' => 'Checkup',
                'appointment_date' => now()
            ],
            [
                'user_id' => 4,
                'booking_date' => now(),
                'appointment_type' => 'Chit-Chat',
                'appointment_date' => now()
            ],
            [
                'user_id' => 4,
                'booking_date' => now(),
                'appointment_type' => 'Checkup',
                'appointment_date' => now()
            ],
            [
                'user_id' => 5,
                'booking_date' => now(),
                'appointment_type' => 'Chit-Chat',
                'appointment_date' => now()
            ],
            [
                'user_id' => 5,
                'booking_date' => now(),
                'appointment_type' => 'Checkup',
                'appointment_date' => now()
            ],
            [
                'user_id' => 2,
                'booking_date' => now(),
                'appointment_type' => 'Chit-Chat',
                'appointment_date' => now()
            ]
        ]);
    }
}
