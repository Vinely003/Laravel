<?php

namespace App\Http\Controllers;

use App\Models\City;

class CityController extends Controller
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

    public function update($id)
    {
        $city = City::findorFail($id);

        $city->fill(request()->all());
        $city->save();

        return response()->json(['success' => session()->flash('success', 'Város módosítva!')], 202);
    }

    public function destroy($id)
    {
        $city = City::findorFail($id);

        $city->delete();

        return response()->json(['success' => session()->flash('success', 'Város törölve!')], 202);
    }
}
