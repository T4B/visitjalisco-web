<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'taggable');
    }

    public function destinations()
    {
        return $this->morphedByMany('App\Destination', 'taggable');
    }

    public function places()
    {
        return $this->morphedByMany('App\Place', 'taggable');
    }
}
