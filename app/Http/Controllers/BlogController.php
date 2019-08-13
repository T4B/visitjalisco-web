<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getPost(Request $request, $slug)
    {
        $post = \App\Post::where('slug', $slug)->first();
        if ($post){
            return view('post', compact('post'));
        }else{
            return redirect()->route('experiences');
        }
    }
}
