<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(UserTableSeeder::class);

         $this->call(StaffTableSeeder::class);
         $this->call(OrderTableSeeder::class);
         $this->call(PhotoTableSeeder::class);

         $this->call(VideoTableSeeder::class);
         $this->call(PostTableSeeder::class);
         $this->call(TagTableSeeder::class);
         $this->call(TaggableTableSeeder::class);


         $this->call(DoctorTableSeeder::class);
         $this->call(InstituteTableSeeder::class);
         $this->call(ReviewTaggableTableSeeder::class);


        Model::reguard();
    }
}
