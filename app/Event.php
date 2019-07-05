<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use SoftDeletes;

    protected $casts = [
        'highlight' => 'boolean',
    ];

    public function getThumbAttribute()
    {
        return Storage::url($this->thumb_image);
    }

    public function getLargeAttribute()
    {
        return Storage::url($this->large_image);
    }
}
