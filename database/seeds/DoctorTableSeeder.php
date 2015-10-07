<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->truncate();
        DB::table('doctors')->insert([
            [
                'name'          => 'Dr. Kibria'
            ],
            [
                'name'          => 'Dr. Rasel'
            ],
            [
                'name'          => 'Dr. Parveen Fatima'
            ],

        ]);
    }
}
