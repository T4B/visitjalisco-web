<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $sliders = $this->getSliders();
        $events = $this->getEvents();
        $posts = $this->getPosts();
        return view('schedule', compact('sliders', 'events', 'posts'));
    }

    private function getEvents()
    {
        return \App\Event::where('visible', 1)
                            ->orderBy('id', 'desc')
                            ->paginate(4);
    }

    private function getPosts()
    {
        return  \App\Post::where('status', 1)
                        ->inrandomorder()
                        ->take(3)->get();
    }

    private function getSliders()
    {
        return \App\Slider::where('position', 'schedule')->get();
    }
}
