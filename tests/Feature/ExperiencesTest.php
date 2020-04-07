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
                    ->assertViewHas('posts')
                    ->assertViewIs('experiences');
        $experiences = $response->original['experiences'];
        $posts = $response->original['posts'];

        $this->assertEquals(9, count($experiences));
        $this->assertEquals(4, count($posts));
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
}
