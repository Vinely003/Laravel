<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(Request $request)
    {
        if ($request->routeIs('signin')) {
            return view('signin');
        } elseif ($request->routeIs('login')) {
            return view('login');
        } elseif ($request->routeIs('home')) {
            return view('counties-cities', [
                'counties' => County::all(),
                'cities' => City::all()
            ]);
        }
    }
}
