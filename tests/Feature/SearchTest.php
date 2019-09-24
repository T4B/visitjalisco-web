<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;

class SearchTest extends TestCase
{
    /**
     *
     * @test
     */
    public function a_user_can_make_a_term_search()
    {
        $response = $this->get('/search?q=beebmx')
                    ->assertStatus(200)
                    ->assertViewHas('results')
                    ->assertViewIs('search');
    }

    /**
     *
     * @test
     */
    /*public function search_retrieves_results_with_typo_tolerance()
    {
        Event::fake();
        factory('App\Post', 4)->create();
        factory('App\Post')->create([
            'title_es' => 'Lorem ipsum beebmx', 
            'status' => 1
        ]);
        factory('App\Post')->create([
            'excerpt_es' => 'Phasellus est nulla, pharetra sed sodales nec, fringilla vitae augue. Nunc dignissim vitae mi a euismod beeb', 
            'status' => 1
        ]);
        $response = $this->get('/search?q=beeb')
                    ->assertStatus(200);
        $posts = $response->original['posts'];
        $this->assertEquals(2, count($posts));  
    }*/
}
