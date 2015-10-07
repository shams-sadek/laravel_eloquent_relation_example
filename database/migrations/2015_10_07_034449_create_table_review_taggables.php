<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReviewTaggables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_taggables', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('review_taggables_id');
            $table->string('review_taggables_type');
            $table->integer('review');
            $table->text('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('review_taggables');
    }
}
