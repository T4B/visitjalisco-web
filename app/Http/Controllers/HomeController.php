<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = \App\Slider::where('position', 'home')->get();
        $events = \App\Event::where('highlight', 1)->orderBy('id', 'desc')->take(3)->get();
        return view('home', compact('sliders', 'events'));
    }
}
