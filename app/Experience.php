<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Destination;

class Experience extends Model
{
    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
}
