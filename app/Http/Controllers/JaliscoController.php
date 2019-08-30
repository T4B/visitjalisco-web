<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JaliscoController extends Controller
{
    public function jalisco()
    {
        $jalisco = \App\Jalisco::where('language', 'es')->first();
        $regions = \App\Region::all();
        return view('jalisco', compact('jalisco', 'regions'));
    }

    public function mijalisco()
    {
        $videos = \App\Video::where('position', 'mi-jalisco')->orderBy('id', 'desc')->get();
        return view('mi-jalisco', compact('videos')); 
    }
}
