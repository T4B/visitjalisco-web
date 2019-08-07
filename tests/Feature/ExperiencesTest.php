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
}
