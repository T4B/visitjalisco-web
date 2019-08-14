<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function getPage(Request $request, $slug)
    {
        $page = \App\Page::where('slug', $slug)->first();
        if ($page){
            return view('page', compact('page'));
        }else{
            return redirect()->route('home');
        }
    }
}
