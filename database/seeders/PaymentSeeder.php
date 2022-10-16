<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('payments')->truncate();
        DB::Table('payments')->insert([
            [
                'id' => 1,
                'total' => 45.0,
                'transaction_id' => '47858',
                'payment_by' => 'visa',
                'user_id' => 1,
                'order_id' => 1,
            ],
        ]);
    }
}
