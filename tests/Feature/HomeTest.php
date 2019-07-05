<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /**
     *
     * @test
     */
    public function home_view_has_sliders()
    {
        factory('App\Slider', 4)->create();

        $response = $this->get('/')
                    ->assertStatus(200)
                    ->assertViewHas('sliders')
                    ->assertViewIs('home');
        $sliders = $response->original['sliders'];

        $this->assertEquals(4, count($sliders));  
    }

    /**
     *
     * @test
     */
    public function home_view_has_highlighted_events()
    {
        factory('App\Event', 5)->create(['highlight' => 1]);
        factory('App\Event')->create(['highlight' => 0]);

        $response = $this->get('/')
                    ->assertStatus(200)
                    ->assertViewHas('events')
                    ->assertViewIs('home');
        $events = $response->original['events'];

        $this->assertEquals(3, count($events));  
    }
}
