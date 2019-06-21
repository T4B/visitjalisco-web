<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $casts = [
        'order' => 'integer',
    ];
    
    public function getUrlAttribute()
    {
        return Storage::url($this->image);
    }
}
