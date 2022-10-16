<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('features')->truncate();
        DB::Table('features')->insert(
            [
                ['id' => 1,
                    'name' => 'clothes',
                    'value' => 'XL',
                    'type' => 'size',
                    'product_id' => 1,],
            ]
        );
    }
}
