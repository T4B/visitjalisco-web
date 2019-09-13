<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use App;

class Region extends Model implements HasMedia
{
    use HasMediaTrait, SoftDeletes;

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];
    protected $appends = ['interior', 'main', 'href'];

    public function getInteriorAttribute()
    {
        return ($this->interior_image) ? Storage::url($this->interior_image) : asset('images/'.$this->interior_image_default);
    }

    public function getMainAttribute()
    {
        return ($this->main_image) ? Storage::url($this->main_image) : asset('images/'.$this->main_image_default);
    }

    public function gallery()
    {
        return $this->getMedia('gallery')->map(function ($item) {
            return [
                'image' => $item->getFullUrl(),
            ];
        })->toArray();
    }

    public function getHrefAttribute()
    {
        $locale = App::getLocale();
        return ( $locale == config('app.fallback_locale') ? route('region', ['slug' => $this->slug ]) : route('localized.region', ['slug' => $this->slug, 'lang' => $locale ]) ) ;
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
