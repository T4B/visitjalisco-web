<?php

namespace App\Listeners;

use App\Events\PostSaved;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageHandler;

class PostSavedListener implements ShouldQueue
{
    protected $post = null;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostSaved  $event
     * @return void
     */
    public function handle(PostSaved $event)
    {
        $this->post = $event->post;
        $this->file = Storage::disk('public')->get($this->post->image);
        $this->create_sizes();
    }

    protected function create_sizes()
    {
        foreach ($this->post->getSizes() as $name => $size) {
            $image = ImageHandler::make($this->file)
                    ->{ $size['process'] }( 
                            $size['width'], 
                            $size['height'] ?? null, 
                            function ($constraint) {
                                $constraint->aspectRatio();
                                $constraint->upsize();
                            }
                    )->encode('jpg', 90);
            Storage::disk('public')->put($this->post->file_reference($name), (string) $image);
            $image->destroy();
        }
        return $this;
    }
}
