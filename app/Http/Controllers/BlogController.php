<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function getPost(Request $request, $slug)
    {
        $post = \App\Post::where('slug_es', $slug)->first();
       
        if ($post->isPublished() || Auth::check()){
            $categories = \App\Experience::all();
            $regions = \App\Region::all();

            $posts = \App\Post::where('id', '!=', $post->id)
                            ->where('status', 1)
                            ->inrandomorder()
                            ->take(6)
                            ->get();


            return view('post', compact('post', 'posts', 'categories', 'regions'));
        }else{
            return redirect()->route('experiences');
        }
    }
}
