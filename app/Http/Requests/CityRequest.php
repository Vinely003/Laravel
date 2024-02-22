<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'county_id' => ['required', 'exists:counties,id'],
            'name' => ['required', 'alpha', 'min:2', 'max:20', 'unique:cities,name']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A város nevének megadása kötelező!',
            'name.alpha' => 'Csak betű engedélyezett!',
            'name.min' => 'Minimum 2 karaktert kell megadni!',
            'name.max' => 'Maximum 20 karaktert lehet megadni!',
            'name.unique' => 'Ez a városnév már létezik!'
        ];
    }
}
