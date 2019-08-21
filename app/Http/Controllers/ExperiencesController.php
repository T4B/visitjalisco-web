<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    public function index()
    {
        $experiences = \App\Experience::all();
        $posts = \App\Post::orderBy('id', 'desc')->take(4)->get();
        $first_post = $posts->first();
        return view('experiences', compact('experiences', 'posts', 'first_post'));
    }

    public function getExperienceCategory(Request $request, $category)
    {
        $experience = \App\Experience::where('slug', $category)->first();
        if ($experience){
            $destinations = $experience->destinations()->paginate(1);
            return view('experience', compact('experience', 'destinations'));
        }else{
            return redirect()->route('experiences');
        }
    }

    public function getDestination(Request $request, $category, $slug)
    {
        $experience = \App\Experience::where('slug', $category)->first();
        
        if ($experience){
            $destination = \App\Destination::where('slug', $slug)->where('experience_id', $experience->id)->first();
            $posts = \App\Post::inrandomorder()->take(6)->get();

            if ($destination){
                return view('destination', compact('experience', 'destination', 'posts'));
            }
            return redirect()->route('experiences.category', ['category' => $experience->slug ]);
        }else{
            return redirect()->route('experiences');
        }
    }
}
