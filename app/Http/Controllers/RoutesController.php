<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function index()
    {
        $routes = \App\Route::all();
        return view('routes', compact('routes'));
    }

    public function getRoute(Request $request, $slug)
    {
        //return view('route');
        $route = \App\Route::where('slug', $slug)->first();
        if ($route){
            return view('route', compact('route'));
        }else{
            return redirect()->route('routes');
        }
    }
}
