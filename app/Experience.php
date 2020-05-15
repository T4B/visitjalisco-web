<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
// use App\Destination;
use App\Post;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Experience extends Model implements HasMedia
{
    use InteractsWithMedia, SoftDeletes, Searchable;

    protected $table = 'experiences';

    // public function destinations()
    // {
    //     return $this->hasMany(Destination::class);
    // }

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

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function toSearchableArray()
    {
        //$array = $this->toArray();
        //$array = $this->transform($array);

        $array['title_es'] = $this->name_es;
        $array['excerpt_es'] = $this->description_es;
        $array['slug_es'] = $this->slug;

        return $array;
    }
}
