<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $sliders = \App\Slider::where('position', 'schedule')->get();
        $events = \App\Event::orderBy('id', 'desc')->paginate(4);
        return view('schedule', compact('sliders', 'events'));
    }
}
