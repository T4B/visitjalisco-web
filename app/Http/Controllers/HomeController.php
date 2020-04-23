<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = \App\Slider::where('position', 'home')->get();
        $events = $this->getEvents();
        $experiences = \App\Experience::orderBy('order', 'asc')->get();
        $routes = \App\Route::where('highlight', 1)->orderBy('order', 'asc')->take(4)->get();
        $first_route = $routes->first();
        $videos = \App\Video::where('position', 'mi-jalisco')->get();

        return view('home', compact('sliders', 'events', 'experiences', 'routes', 'first_route', 'videos'));
    }

    private function getEvents()
    {
        return \App\Event::where('highlight', 1)
                            ->where('visible', 1)
                            ->orderBy('id', 'desc')
                            ->take(3)->get();
    }
}
