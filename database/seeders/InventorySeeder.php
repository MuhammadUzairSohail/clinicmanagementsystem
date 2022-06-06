<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->insert([
           [
               'item_name' => 'GIC',
               'buying_date' => now(),
               'quantity' => 20,
               'expiry_date' => now()
           ],
            [
                'item_name' => 'Braces',
                'buying_date' => now(),
                'quantity' => 10,
                'expiry_date' => now()
            ]
        ]);
    }
}
