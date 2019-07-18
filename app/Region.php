<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Region extends Model
{
    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];
    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return Str::slug($this->name_es);
    }
}
