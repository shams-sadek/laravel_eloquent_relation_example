<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->truncate();

        DB::table('videos')->insert([
            [
                'name'      => 'Doremon Cartoon'
            ],
            [
                'name'      => 'Mina Cartoon'
            ],
            [
                'name'      => 'James Bond'
            ],
            [
                'name'      => 'Titanic'
            ],
            [
                'name'      => 'Hungama'
            ],

        ]);
    }
}
