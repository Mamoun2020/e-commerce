<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         *        $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('country');
            $table->string('city');
            $table->string('zipcode');
            $table->string('password');
         */
        DB::Table('users')->truncate();
        DB::Table('users')->insert(
            [
                ['id'=> 1,
                'name'=>'Mamoun',
                'email'=>'mmun2019@gmial.com',
                'mobile'=> '0592570714',
                'country'=> 'Palestine',
                'city'=> 'Khan Yunis',
                'zipcode'=> '101',
                'password'=> '123456',],
            ]
        );
    }
}
