<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        DB::table('posts')->insert([
            [
                'name'      => 'I Am Shams Sadek, Mymensingh'
            ],
            [
                'name'      => 'I Am Talha Ekhlas, Pabna'
            ],
            [
                'name'      => 'I Am Mahabub Rabbni, Kurigram'
            ],
            [
                'name'      => 'I Am Asik, Sirajgonj'
            ],
            [
                'name'      => 'I Am Nuruzzaman Milon, Dhaka'
            ],


        ]);
    }
}
