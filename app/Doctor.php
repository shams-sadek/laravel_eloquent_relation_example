<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function reviews()
    {
        return $this->morphToMany('App\User', 'review_taggables');
    }
}
