<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Events\PostSaved;
use App\Events\PostDeleted;
use App\Listeners\PostSavedListener;
use App\Listeners\PostDeletedListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use Illuminate\Events\CallQueuedListener;

class PostTest extends TestCase
{
    /**
     *
     * @test
     */
    public function user_can_see_a_post_by_slug()
    {
        factory('App\Post', 4)->create();
        
        $post = \App\Post::inrandomorder()->first();
        $response = $this->get('/blog/'.$post->slug_es)
            ->assertStatus(200)
            ->assertViewHas('post')
            ->assertViewIs('post');
        $page_post = $response->original['post'];
        $this->assertEquals($post->title_es, $page_post->title_es);
    }   

     /**
     *
     * @test
     */
    public function blog_post_view_has_posts_except_current()
    {
        factory('App\Post', 10)->create();

        $post = \App\Post::inrandomorder()->first();
        
        $response = $this->get('/blog/'.$post->slug_es)
                    ->assertStatus(200)
                    ->assertViewHas('posts')
                    ->assertViewIs('post');
        $posts = $response->original['posts'];

        $this->assertEquals(6, count($posts));  
        $this->assertFalse($posts->contains($post->id));    
    }
    
    /**
     *
     * @test
     */
    public function an_event_is_dispatched_when_post_is_saved()
    {
        Event::fake();

        $post =  factory('App\Post')->create();
        
        Event::assertDispatched(PostSaved::class, function ($e) use ($post) {
            return $e->post->id === $post->id;
        });
    }

     /**
     *
     * @test
     */
    public function post_saved_event_is_sent_to_queue()
    {
        Queue::fake();

        $post =  factory('App\Post')->create();

        Queue::assertPushed(CallQueuedListener::class, function ($job) {
            return $job->class == PostSavedListener::class;
        });
    }

    /**
     *
     * @test
     */
    public function an_event_is_dispatched_when_post_is_deleted()
    {
        Event::fake();

        $post =  factory('App\Post')->create();
        $post->delete();
        
        Event::assertDispatched(PostDeleted::class, function ($e) use ($post) {
            return $e->post->id === $post->id;
        });
    }

    /**
     *
     * @test
     */
    public function post_deleted_event_is_sent_to_queue()
    {
        Queue::fake();

        $post =  factory('App\Post')->create();
        $post->delete();

        Queue::assertPushed(CallQueuedListener::class, function ($job) {
            return $job->class == PostDeletedListener::class;
        });
    }
}
