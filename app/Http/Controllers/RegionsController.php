<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionsController extends Controller
{
    public function index()
    {
        $regions = \App\Region::all();
        return view('regions', compact('regions'));
    }
}
