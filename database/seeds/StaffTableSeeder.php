<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->truncate();

        DB::table('staffs')->insert([
            [
                'name'      => 'Shams Sadek'
            ],
            [
                'name'      => 'Talha Ekhlas'
            ],
            [
                'name'      => 'Moniruzzaman Milon'
            ],
            [
                'name'      => 'Rana'
            ],

        ]);
    }
}
