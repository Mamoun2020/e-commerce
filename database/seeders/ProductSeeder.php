<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('products')->truncate();
        DB::Table('products')->insert(
          [
              'id'=> 1,
              'name'=> 't-shirt',
              'slug'=>'t-shirt',
              'content'=>'lorem test to t-shirt product from clothes category',
              'image'=> 'https://assets.vogue.com/photos/617c1cc0842b6d00d5ee6b61/3:4/w_1280%2Cc_limit/slide_13.jpg',
              'price'=> 45.0,
              'quantity'=> 5,
              'discount_id'=>1,
              'category_id'=>1,
          ],
        );
    }
}
