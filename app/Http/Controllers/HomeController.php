<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = \App\Slider::all();
        return view('home', compact('sliders'));
    }
}
