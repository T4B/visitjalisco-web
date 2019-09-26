<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class SearchController extends Controller
{
    public function search (Request $request)
    {
        if($request->has('q')){	
            $q = $request->get('q');
            $results = \App\Search\VisitJalisco::search($q)->paginate(4);
            $results->appends(['q' => $q ]);
            return view('search', compact('results'));
        }else{
            return redirect()->route('experiences');
        }
        
    }
}
