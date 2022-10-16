<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('orders')->truncate();
        DB::Table('orders')->insert([
            [
                'id' => 1,
                'total' => 45.0,
                'user_id' => 1,
            ],
        ]);
    }
}
