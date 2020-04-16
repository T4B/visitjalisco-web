<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Jalisco extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'jalisco';

    protected $attributes = [
        'language' => 'es',
    ];

    public function gallery()
    {
        return $this->getMedia('gallery')->map(function ($item) {
            return [
                'image' => $item->getFullUrl(),
                'name' => $item->getCustomProperty('name')
            ];
        })->toArray();
    }
}
