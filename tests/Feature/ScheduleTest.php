<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;

class ScheduleTest extends TestCase
{
    /**
     *
     * @test
     */
    public function schedule_view_has_events_posts_and_sliders()
    {
        Queue::fake();
        factory('App\Event', 3)->create();
        factory('App\Post', 5)->create();
        factory('App\Slider', 2)->create(['position' => 'schedule']);
        factory('App\Slider', 2)->create(['position' => 'home']);

        $response = $this->get('/agenda')
                    ->assertStatus(200)
                    ->assertViewHas('events')
                    ->assertViewHas('posts')
                    ->assertViewHas('sliders')
                    ->assertViewIs('schedule');
        $events = $response->original['events'];
        $posts = $response->original['posts'];
        $sliders = $response->original['sliders'];

        $this->assertEquals(3, count($events));  
        $this->assertEquals(3, count($posts));  
        $this->assertEquals(2, count($sliders));  
    }


    /**
     *
     * @test
     */
    public function schedule_view_only_show_visible_events()
    {
        Queue::fake();
        factory('App\Event', 2)->create();
        factory('App\Event', 2)->create(['visible' => 0]);

        $response = $this->get('/agenda')
                    ->assertStatus(200)
                    ->assertViewHas('events')
                    ->assertViewIs('schedule');
        $events = $response->original['events'];

        $this->assertEquals(2, count($events));  
    }
}
