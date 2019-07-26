<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ConventionCenter extends Model
{
    public function getUrlAttribute()
    {
        return Storage::url($this->image);
    }
}
