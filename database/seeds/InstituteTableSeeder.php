<?php

use Illuminate\Database\Seeder;

class InstituteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutes')->truncate();
        DB::table('institutes')->insert([
            [
                'name'          => 'Pranto Diagnostic Center'
            ],
            [
                'name'          => 'Novo Medical Center'
            ],
            [
                'name'          => 'Sayem Diagno Complex'
            ],

        ]);
    }
}
