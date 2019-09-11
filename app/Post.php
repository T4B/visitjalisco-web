<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Events\PostSaved;

class Post extends Model
{
    protected $sizes = [
        'thumb' => [
            'width' => 400,
            'height' => 300,
            'process' => 'fit',
        ],
        'medium' => [
            'width' => 1200,
            'height' => 400,
            'process' => 'fit',
        ],
        'large' => [
            'width' => 1920,
            'process' => 'resize',
        ],
        'og' => [
            'width' => 1200,
            'height' => 630,
            'process' => 'fit',
        ],
    ];

    protected $dispatchesEvents = [
        'saved' => PostSaved::class,
        //'deleted' => PostDeleted::class,
    ];

    protected $appends = ['sizes'];

    public function getUrlAttribute()
    {
        return ( Storage::disk('public')->exists($this->image) ) ? Storage::url($this->image) : asset('images/'.$this->image);
    }

    public function getSizesAttribute()
    {
        return [
            'thumb' => $this->file_url('thumb'),
            'medium' => $this->file_url('medium'),
            'large' => $this->file_url('large'),
            'og' => $this->file_url('og'),
        ];
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function getSizes()
    {
        return $this->sizes;
    }

    public function path()
    {
        list($path, $name)  = explode("/", $this->image);;
        return $path . '/';
    }

    public function name()
    {
        $file = explode('/', $this->image);
        return explode('.', end($file))[0];
    }

    public function extension()
    {
        $file = explode('/', $this->image);
        return explode('.', end($file))[1];
    }

    public function file_reference($size)
    {
        return $this->path() . $this->name() . '-' . $size . '.' . $this->extension();
    }

    public function file_url($size = null)
    {
        if (!$size) {
            return Storage::url($this->file);
        }

        $url = Storage::url($this->file_reference($size));
        if ($size && $url) {
            return $url;
        }

        return false;
    }

}
