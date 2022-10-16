<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('carts')->truncate();
        DB::Table('carts')->insert(
            [
                [
                    'id' => 1,
                    'price' => 45.0,
                    'quantity' => 1,
                    'user_id' => 1,
                    'product_id' => 1,
                    'order_id' => 1,
                ],
            ]
        );
    }
}
