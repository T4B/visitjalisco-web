<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Region extends Model
{
    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];
    protected $appends = ['name', 'interior'];

    public function getNameAttribute()
    {
        return Str::slug($this->name_es);
    }

    public function getInteriorAttribute()
    {
        return ($this->interior_image) ? Storage::url($this->interior_image) : asset('images/'.$this->interior_image_default);
    }
}
