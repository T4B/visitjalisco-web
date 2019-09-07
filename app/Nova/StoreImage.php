<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageHandler;

class StoreImage
{
    private $field;
    private $process;
    private $width;
    private $height;
    private $disk;
    private $path;
    private $extra;

    function __construct($request, $disk, $path, $field, $process, $width, $height = null) {
        $this->field = $field;
        $this->process = $process;
        $this->width  = $width;
        $this->height  = $height;
        $this->disk  = $disk;
        $this->path  = $path;
    }

    public function __invoke(Request $request)
    {
        $fileName = Str::orderedUuid() . '.jpg';

        $resized = ImageHandler::make($request->{$this->field})
                    ->{$this->process}($this->width, $this->height, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode('jpg', 90);
        Storage::disk($this->disk)->put($this->path.'/'.$fileName, (string) $resized);
        $resized->destroy();

        return [
            $this->field => $this->path.'/'.$fileName,
        ];
    }
}