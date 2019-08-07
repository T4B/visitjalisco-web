<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExperiencesTest extends TestCase
{
     /**
     *
     * @test
     */
    public function experiences_view_has_experiences()
    {
        $response = $this->get('/experiencias')
                    ->assertStatus(200)
                    ->assertViewHas('experiences')
                    ->assertViewIs('experiences');
        $experiences = $response->original['experiences'];

        $this->assertEquals(9, count($experiences));  
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
        ;
        $response = $this->get('/experiencias/beeb-mx')
            ->assertRedirect('/experiencias');
    }
}
