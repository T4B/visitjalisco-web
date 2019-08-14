<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    public function getUrlAttribute()
    {
        return Storage::url($this->image);
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
