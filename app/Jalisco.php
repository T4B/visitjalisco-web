<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Jalisco extends Model implements HasMedia
{
    use HasMediaTrait;

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
