<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }
}
