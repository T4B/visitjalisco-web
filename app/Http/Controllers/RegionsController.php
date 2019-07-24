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

    public function getRegion(Request $request, $slug)
    {
        $region = \App\Region::where('slug', $slug)->first();
        if ($region){
            return view('region', compact('region'));
        }else{
            
            return redirect()->route('regiones');
        }
    }
}
