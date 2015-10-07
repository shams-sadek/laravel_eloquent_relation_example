<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();

        DB::table('tags')->insert([
            [
                'name'      => 'Dhaka'
            ],
            [
                'name'      => 'Mymensingh'
            ],
            [
                'name'      => 'Sylhet'
            ],
            [
                'name'      => 'Barishal'
            ],
            [
                'name'      => 'Rajshahi'
            ],

        ]);
    }
}
