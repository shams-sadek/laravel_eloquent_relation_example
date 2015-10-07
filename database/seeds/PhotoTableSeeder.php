<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->truncate();

        DB::table('photos')->insert([
            [
                'path'              => 'image_path',
                'imageable_id'      => 1,
                'imageable_type'    => 'App\Order',
            ],
            [
                'path'              => 'image_path',
                'imageable_id'      => 1,
                'imageable_type'    => 'App\Staff',
            ],
            [
                'path'              => 'image_path',
                'imageable_id'      => 2,
                'imageable_type'    => 'App\Staff',
            ],
            [
                'path'              => 'image_path',
                'imageable_id'      => 2,
                'imageable_type'    => 'App\Order',
            ],


        ]);
    }
}
