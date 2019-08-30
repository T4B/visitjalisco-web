<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Destination;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Experience extends Model implements HasMedia
{
    use HasMediaTrait;

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }

    public function getUrlAttribute()
    {
        return ( Storage::disk('public')->exists($this->image) ) ? Storage::url($this->image) : asset('images/'.$this->image);
    }

    public function gallery()
    {
        return $this->getMedia('gallery')->map(function ($item) {
            return [
                'image' => $item->getFullUrl(),
                'text' => $item->getCustomProperty('text'),
                'link' => $item->getCustomProperty('link')
            ];
        })->toArray();
    }
}
