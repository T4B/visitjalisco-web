<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getPost(Request $request, $slug)
    {
        $post = \App\Post::where('slug_es', $slug)->first();

       
        if ($post){
             $posts = \App\Post::where('id', '!=', $post->id)
                            ->inrandomorder()
                            ->take(6)
                            ->get();


            return view('post', compact('post', 'posts'));
        }else{
            return redirect()->route('experiences');
        }
    }
}
