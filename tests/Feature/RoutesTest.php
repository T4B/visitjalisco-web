<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTests extends TestCase
{
    /**
     *
     * @test
     */
    public function routes_view_has_routes()
    {
        $response = $this->get('/rutas')
                    ->assertStatus(200)
                    ->assertViewHas('routes')
                    ->assertViewIs('routes');
        $routes = $response->original['routes'];

        $this->assertEquals(8, count($routes));  
    }

    /**
     *
     * @test
     */
    public function user_can_see_a_route_by_slug()
    {
        $route = \App\Route::inRandomOrder()->first();
        $response = $this->get('/ruta/'.$route->slug)
            ->assertStatus(200)
            ->assertViewHas('route')
            ->assertViewIs('route');
        $page_route = $response->original['route'];
        $this->assertEquals($route->name_es, $page_route->name_es);

    }   
    
    /**
     *
     * @test
     */
    public function it_redirects_to_routes_if_slug_doesnt_exists()
    {
        $response = $this->get('/ruta/beeb-mx')
            ->assertRedirect('/rutas');
    }
}
