<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class BusinessTravel extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $table = 'business_travel';

    public function gallery()
    {
        return $this->getMedia('gallery')->map(function ($item) {
            return [
                'image' => $item->getFullUrl(),
            ];
        })->toArray();
    }
}
