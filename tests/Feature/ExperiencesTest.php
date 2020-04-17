<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Queue;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExperiencesTest extends TestCase
{
     /**
     *
     * @test
     */
    public function experiences_view_has_experiences_and_posts()
    {
        Queue::fake();
        factory('App\Post', 10)->create();

        $response = $this->get('/experiencias')
                    ->assertStatus(200)
                    ->assertViewHas('experiences')
                    ->assertViewHas('highlighted_posts')
                    ->assertViewHas('posts')
                    ->assertViewIs('experiences');
        $experiences = $response->original['experiences'];
        $highlighted_posts = $response->original['highlighted_posts'];
        $posts = $response->original['posts'];

        $this->assertEquals(9, count($experiences));
        $this->assertEquals(4, count($highlighted_posts));
        $this->assertEquals(3, count($posts));
        $this->assertStringContainsString('/articulos', $posts->links()->paginator->path());
    }

    /**
     *
     * @test
     */
    public function user_can_see_a_experience_by_slug()
    {
        $experience = \App\experience::inrandomorder()->first();
        $response = $this->get('/experiencias/'.$experience->slug)
            ->assertStatus(200)
            ->assertViewHas('experience')
            ->assertViewIs('experience');
        $page_experience = $response->original['experience'];
        $this->assertEquals($experience->name_es, $page_experience->name_es);

    }

    /**
     *
     * @test
     */
    public function it_redirects_to_experiences_if_slug_doesnt_exists()
    {
        $response = $this->get('/experiencias/beeb-mx')
            ->assertRedirect('/experiencias');
    }

    /**
     *
     * @test
     */
    public function articles_view_has_posts()
    {
        Queue::fake();
        factory('App\Post', 10)->create();

        $response = $this->get('/articulos')
                    ->assertStatus(200)
                    ->assertViewHas('posts')
                    ->assertViewIs('articles');
        $posts = $response->original['posts'];

        $this->assertEquals(3, count($posts));
    }
}
