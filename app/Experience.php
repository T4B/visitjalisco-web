<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Destination;

class Experience extends Model
{
    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }

    public function getUrlAttribute()
    {
        return ( Storage::exists($this->image) ) ? Storage::url($this->image) : asset('images/'.$this->image);
    }
}
