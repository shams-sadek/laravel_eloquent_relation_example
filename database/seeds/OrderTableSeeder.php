<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->truncate();

        DB::table('orders')->insert([
            [
                'price'      => 10
            ],
            [
                'price'      => 20
            ],
            [
                'price'      => 50
            ],
            [
                'price'      => 500
            ],
            [
                'price'      => 320
            ],
            [
                'price'      => 450
            ],

        ]);
    }
}
