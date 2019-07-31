<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use App\Place;

class Route extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $appends = ['main', 'map', 'gallerybackground'];

    public function getMainAttribute()
    {
        return ( Storage::exists($this->header_image) ) ? Storage::url($this->header_image) : asset('images/'.$this->header_image);
    }

    public function getMapAttribute()
    {
        return ( Storage::exists($this->map_image) ) ? Storage::url($this->map_image) : asset('images/'.$this->map_image);
    }

    public function getGallerybackgroundAttribute()
    {
        return ( Storage::exists($this->gallery_image) ) ? Storage::url($this->gallery_image) : asset('images/'.$this->gallery_image);
    }

    public function gallery()
    {
        return $this->getMedia('gallery')->map(function ($item) {
            return [
                'image' => $item->getFullUrl(),
            ];
        })->toArray();
    }

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
