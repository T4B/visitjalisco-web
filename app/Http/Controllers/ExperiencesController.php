<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    public function index()
    {
        $experiences = \App\Experience::all();
        $highlighted_posts = \App\Post::with('experiences', 'regions')->where('status', 1)->where('highlight', 1)->orderBy('id', 'desc')->take(4)->get();
        $first_post = $highlighted_posts->first();
        
        $posts = $this->getPosts();
        $posts->withPath('/articulos');
        
        return view('experiences', compact('experiences', 'highlighted_posts', 'first_post', 'posts'));
    }

    public function getExperienceCategory(Request $request, $category)
    {
        $experience = \App\Experience::where('slug', $category)->first();
        if ($experience) {
            $posts = $experience->posts()->where('status', 1)->paginate(3);
            return view('experience', compact('experience', 'posts'));
        } else {
            return redirect()->route('experiences');
        }
    }

    public function getDestination(Request $request, $category, $slug)
    {
        $experience = \App\Experience::where('slug', $category)->first();

        if ($experience) {
            $destination = \App\Destination::where('slug', $slug)->where('experience_id', $experience->id)->first();
            $posts = \App\Post::inrandomorder()->take(6)->get();

            if ($destination) {
                return view('destination', compact('experience', 'destination', 'posts'));
            }
            return redirect()->route('experiences.category', ['category' => $experience->slug]);
        } else {
            return redirect()->route('experiences');
        }
    }

    public function getArticles()
    {
        $posts = $this->getPosts();
        return view('articles', compact('posts'));
    }

    private function getPosts(){
        return \App\Post::with('experiences', 'regions')
                                ->where('status', 1)
                                ->orderBy('id', 'desc')
                                ->paginate(3);
    }
}
