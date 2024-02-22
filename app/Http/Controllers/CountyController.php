<?php

namespace App\Http\Controllers;

use App\Models\County;

class CountyController extends Controller
{
    public function search(County $county)
    {
        return view('counties-cities-table', [
            'cities' => $county->cities,
            'currentCounty' => $county,
            'countyId' => $county->id,
            'counties' => $county->all()
        ]);
    }
}
