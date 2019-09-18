<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search (Request $request)
    {
        //$posts = \App\Post::with('experiences', 'regions')->orderBy('id', 'desc')->paginate(4);
        if($request->has('q')){
    		$posts = \App\Post::search($request->get('q'))->paginate(4);	
    	}else{
    		$posts = \App\Post::with('experiences', 'regions')->orderBy('id', 'desc')->paginate(4);
    	}

        return view('search', compact('posts'));
    }
}
