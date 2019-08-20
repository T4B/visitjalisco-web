<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
        $response = $this->get('/blog/'.$post->slug)
            ->assertStatus(200)
            ->assertViewHas('post')
            ->assertViewIs('post');
        $page_post = $response->original['post'];
        $this->assertEquals($post->title, $page_post->title);
    }   

     /**
     *
     * @test
     */
    public function blog_post_view_has_posts_except_current()
    {
        factory('App\Post', 10)->create();

        $post = \App\Post::inrandomorder()->first();
        
        $response = $this->get('/blog/'.$post->slug)
                    ->assertStatus(200)
                    ->assertViewHas('posts')
                    ->assertViewIs('post');
        $posts = $response->original['posts'];

        $this->assertEquals(6, count($posts));  
        $this->assertFalse($posts->contains($post->id));    
    }  
}
