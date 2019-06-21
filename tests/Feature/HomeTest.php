<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $page = factory('App\Slider', 4)->create();

        $response = $this->get('/')
                    ->assertStatus(200)
                    ->assertViewHas('sliders')
                    ->assertViewIs('home');
        $sliders = $response->original['sliders'];

        $this->assertEquals(4, count($sliders));  
    }
}
