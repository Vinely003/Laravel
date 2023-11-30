<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;

class CityController extends Controller
{
    public function store(CityRequest $request)
    {
        $validated = $request->validated();

        City::create($validated);

        return back()->with(session()->flash('success', 'Új város létrehozva!'));
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
