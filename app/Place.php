<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Route;

class Place extends Model
{
    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function getUrlAttribute()
    {
        return Storage::url($this->image);
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
