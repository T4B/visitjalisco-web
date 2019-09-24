<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class SearchController extends Controller
{
    public function search (Request $request)
    {
        if($request->has('q')){	
            $query = $request->get('q');
            $results = \App\Search\VisitJalisco::search($query)->paginate(4);
            $results->appends(['q' => $query ]);
        }
        // else{
    	// 	$posts = \App\Post::with('experiences', 'regions')->orderBy('id', 'desc')->paginate(4);
    	// }

        return view('search', compact('results'));
    }
}
