<?php

namespace App\Listeners;

use App\Events\PostDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class PostDeletedListener  implements ShouldQueue
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
     * @param  PostDeleted  $event
     * @return void
     */
    public function handle(PostDeleted $event)
    {
        $this->post = $event->post;
        $this->destroy();        
    }

    protected function destroy()
    {
        foreach ($this->post->getSizes() as $name => $size) {
            Storage::disk('public')->delete($this->post->file_reference($name));
        }

        Storage::disk('public')->delete($this->post->image);

        return $this;
    }
}
