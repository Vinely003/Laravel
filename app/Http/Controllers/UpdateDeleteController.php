<?php

namespace App\Http\Controllers;

use App\Models\City;

class UpdateDeleteController extends Controller
{
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
