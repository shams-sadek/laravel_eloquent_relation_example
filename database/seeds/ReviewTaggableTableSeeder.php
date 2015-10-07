<?php

use Illuminate\Database\Seeder;

class ReviewTaggableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_taggables')->truncate();
        DB::table('review_taggables')->insert([
            [
                'user_id'                       => 1,
                'review_taggables_id'           => 1,
                'review_taggables_type'         => 'App\Doctor',
                'review'                        => 4,
                'comment'                       => 'Hello World',
            ],
            [
                'user_id'                       => 1,
                'review_taggables_id'           => 1,
                'review_taggables_type'         => 'App\Institute',
                'review'                        => 3,
                'comment'                       => 'Hello World',
            ],

            [
                'user_id'                       => 2,
                'review_taggables_id'            => 1,
                'review_taggables_type'          => 'App\Institute',
                'review'                        => 2,
                'comment'                       => 'Hello Sadik',
            ],

        ]);
    }
}
