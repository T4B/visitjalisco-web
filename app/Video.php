<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $appends = ['preview'];


    public function getPreviewAttribute()
    {
        return Storage::url($this->image);
    }
}
