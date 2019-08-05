<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Experience;

class Destination extends Model
{
    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
