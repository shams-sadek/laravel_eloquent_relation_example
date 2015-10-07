<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name'          => 'Shams Sadek',
                'email'         => 'shamssadek@gmail.com',
                'password'      => bcrypt('123456'),

            ],
            [
                'name'          => 'Talha Ekhlas',
                'email'         => 'talha@gmail.com',
                'password'      => bcrypt('123456'),
            ],
            [
                'name'          => 'Mahabub Rabbani',
                'email'         => 'mahabub@gmail.com',
                'password'      => bcrypt('123456'),
            ],


        ]);

    }
}
