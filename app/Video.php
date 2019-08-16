<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Events\VideoSaved;
use Embed\Embed;

class Video extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $appends = ['preview'];


    public function getPreviewAttribute()
    {
        return Storage::url($this->image);
    }

    protected $dispatchesEvents = [
        'saved' => VideoSaved::class,
    ];

    public function saveQuietly(array $options = [])
    {
        return static::withoutEvents(function () use ($options) {
            return $this->save($options);
        });
    }

    public function getEmbedCode()
    {
        $embed = Embed::create($this->video_url);
        $this->embed = $embed->code;
        $this->saveQuietly();
    }
}
