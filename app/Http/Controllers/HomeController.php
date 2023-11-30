<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;

class HomeController extends Controller
{
    public function index()
    {
        return view('counties-cities', [
            'counties' => County::all(),
            'cities' => City::all()
        ]);
    }
}
