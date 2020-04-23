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
    public function home_view_has_highlighted_and_visible_events()
    {
        factory('App\Event', 2)->create(['highlight' => 1]);
        factory('App\Event', 1)->create(['highlight' => 1, 'visible' => 0]);
        factory('App\Event')->create(['highlight' => 0]);

        $response = $this->get('/')
                    ->assertStatus(200)
                    ->assertViewHas('events')
                    ->assertViewIs('home');
        $events = $response->original['events'];

        $this->assertEquals(2, count($events));  
    }

    /**
     *
     * @test
     */
    public function home_view_has_experiences()
    {
        $response = $this->get('/')
                    ->assertStatus(200)
                    ->assertViewHas('experiences')
                    ->assertViewIs('home');
        $experiences = $response->original['experiences'];

        $this->assertEquals(9, count($experiences));  
    }

    /**
     *
     * @test
     */
    public function home_view_has_routes()
    {
        factory('App\Route', 4)->create(['highlight' => 1]);
        $response = $this->get('/')
                    ->assertStatus(200)
                    ->assertViewHas('routes')
                    ->assertViewIs('home');
        $routes = $response->original['routes'];

        $this->assertEquals(4, count($routes));  
    }

    /**
     *
     * @test
     */
    public function home_view_has_mi_jalisco_videos()
    {
        factory('App\Video', 4)->create(['position' => 'mi-jalisco']);
        factory('App\Video', 3)->create(['position' => 'jalisco']);

        $response = $this->get('/')
                    ->assertStatus(200)
                    ->assertViewHas('videos')
                    ->assertViewIs('home');
        $videos = $response->original['videos'];

        $this->assertEquals(4, count($videos));  
    }
}
