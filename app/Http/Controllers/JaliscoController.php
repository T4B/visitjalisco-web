<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JaliscoController extends Controller
{
    public function jalisco()
    {
        $jalisco = \App\Jalisco::where('language', 'es')->first();
        return view('jalisco', compact('jalisco'));
    }

    public function mijalisco()
    {
        return view('mi-jalisco');
    }
}
