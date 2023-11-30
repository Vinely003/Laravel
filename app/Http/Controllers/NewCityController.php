<?php

namespace App\Http\Controllers;

use App\Models\City;

class NewCityController extends Controller
{
    public function store()
    {

        $message = [
            'name.required' => 'A város nevének megadása kötelező!',
            'name.alpha' => 'Csak betű engedélyezett!',
            'name.min' => 'Minimum 2 karaktert kell megadni!',
            'name.max' => 'Maximum 20 karaktert lehet megadni!',
            'name.unique' => 'Ez a városnév már létezik!'
        ];

        $attributes = request()->validate([
            'county_id' => 'required|exists:counties,id',
            'name' => ['required', 'alpha', 'min:2', 'max:20', 'unique:cities,name']
        ], $message);

        City::create($attributes);
        session()->flash('success', 'Új város létrehozva!');

        return back();
    }
}
