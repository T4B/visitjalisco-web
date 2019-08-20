<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegionsTest extends TestCase
{
    /**
     *
     * @test
     */
    public function regions_view_has_regions()
    {
        $response = $this->get('/regiones')
                    ->assertStatus(200)
                    ->assertViewHas('regions')
                    ->assertViewIs('regions');
        $regions = $response->original['regions'];

        $this->assertEquals(8, count($regions));  
    }

     /**
     *
     * @test
     */
    public function user_can_see_a_region_by_slug()
    {
        $region = \App\Region::inrandomorder()->first();
        $response = $this->get('/region/'.$region->slug)
            ->assertStatus(200)
            ->assertViewHas('region')
            ->assertViewIs('region');
        $page_region = $response->original['region'];
        $this->assertEquals($region->name_es, $page_region->name_es);
    }   
    
    /**
     *
     * @test
     */
    public function it_redirects_to_regions_if_slug_doesnt_exists()
    {
        ;
        $response = $this->get('/region/beeb-mx')
            ->assertRedirect('/regiones');
    }

     /**
     *
     * @test
     */
    public function region_view_has_posts()
    {
        factory('App\Post', 10)->create();

        $region = \App\Region::inrandomorder()->first();
        
        $response = $this->get('/region/'.$region->slug)
                    ->assertStatus(200)
                    ->assertViewHas('posts')
                    ->assertViewIs('region');
        $posts = $response->original['posts'];

        $this->assertEquals(6, count($posts));  
    }    
}
