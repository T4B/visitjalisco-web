<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConventionCenter extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    public function getUrlAttribute()
    {
        return Storage::url($this->image);
    }
}
