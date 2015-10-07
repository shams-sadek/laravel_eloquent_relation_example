<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    /*
     # Polymorphic Relationship Example
     # Photo, Staff, Order Models
     #
    */
    $photo = App\Photo::find(3); /* You Can Check ID [ 1,2,3,4 ] */

    $imageable = $photo->imageable;

    return $imageable;

});

Route::get('/many-to-many-polymorphic', function(){

    $posts = App\Post::find(1);
//
    return $posts->tags;

    $vieos = App\Video::find(1);

//    return $vieos->tags;

    $tags = App\Tag::find(2);

//    return $tags->posts;

    foreach ($tags->posts as $post)
    {
        echo $post->pivot->tag_id;
    }

//    return $tags->videos;

    return 'Hello World';
});


Route::get('/review', function(){

    $doctors   = App\Doctor::find(1);

    return $doctors->reviews;

   return 'Review';
});
