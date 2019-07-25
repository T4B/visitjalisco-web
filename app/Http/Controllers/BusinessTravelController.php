<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessTravelController extends Controller
{
    public function index()
    {
        return view('business-travel');
    }
}
