<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::Table('rates')->truncate();
       DB::Table('rates')->insert(

        [
           [
            'id'=>1,
            'rate'=>4,
            'comment'=>'lorn test to rate product',
            'product_id'=>1,
            ],
        ],
       );
    }
}
