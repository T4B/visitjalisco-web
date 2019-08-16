<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Events\VideoSaved;
use App\Listeners\VideoSavedListener;
use Illuminate\Support\Facades\Event;

class VideosTest extends TestCase
{
    /**
     *
     * @test
     */
    public function an_event_is_dispatched_when_video_is_saved()
    {
        Event::fake();

        $video =  factory('App\Video')->create();
        
        Event::assertDispatched(VideoSaved::class, function ($e) use ($video) {
            return $e->video->id === $video->id;
        });
    }

    /**
     *
     * @test
     */
    public function video_embed_code_is_retrieved_after_video_is_saved()
    {
        $listener = new VideoSavedListener();
        
        $video =  factory('App\Video')->create();

        $listener->handle(new VideoSaved($video));

        $this->assertNotNull($video->embed);
    }
}
