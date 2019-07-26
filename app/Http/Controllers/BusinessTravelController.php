<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessTravelController extends Controller
{
    public function index()
    {
        $page = \App\BusinessTravel::first();
        $centers = \App\ConventionCenter::all();
        return view('business-travel', compact('page', 'centers'));
    }
}
