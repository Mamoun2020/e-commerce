<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('discounts')->truncate();
        DB::Table('discounts')->insert(
            [
                ['id'=>1,
                'percentage'=> 55.0,
                'expire_date'=> '2022-10-05',
                'code'=> '225588',],
            ]
        );
    }
}
