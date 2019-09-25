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
        //$posts = \App\Post::inrandomorder()->take(6)->get();
        $posts = $region->posts()->where('status', 1)->inrandomorder()->take(6)->get();
        if ($region){
            return view('region', compact('region', 'posts'));
        }else{
            return redirect()->route('regions');
        }
    }
}
