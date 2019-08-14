<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Experience;
use Illuminate\Support\Facades\Storage;

class Destination extends Model
{
    public function experience()
    {
        return $this->belongsTo(Experience::class);
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
