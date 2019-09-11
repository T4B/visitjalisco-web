<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class JaliscoController extends Controller
{
    public function jalisco()
    {
        $jalisco = \App\Jalisco::where('language', app()->getLocale())->first();
        if(is_null($jalisco)){
            $jalisco = \App\Jalisco::where('language', 'es')->first();
        }
        $regions = \App\Region::all();
        
        $locale = App::getLocale();
        $regions_raw = \App\Region::all();

        $regions = $regions_raw->map(function ($region) use ($locale) {
            return [
                    'name' => ${'region'}->{'name_' . $locale},
                    'short_description' => ${'region'}->{'short_description_' . $locale},
                    'slug' => $region->slug,
                    'href' => $region->href,
                    'interior' => $region->interior,
                ];
        });

        return view('jalisco', compact('jalisco', 'regions'));
    }

    public function mijalisco()
    {
        $videos = \App\Video::where('position', 'mi-jalisco')->orderBy('id', 'desc')->get();
        return view('mi-jalisco', compact('videos')); 
    }
}
