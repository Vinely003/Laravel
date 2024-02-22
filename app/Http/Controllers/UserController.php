<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(UserRequest $request)
    {
        $validated = $request->validated();

        if (auth()->attempt($validated)) {
            return redirect("home");
        } else {
            return redirect('/');
        }
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8']
        ]);

        if ($validated) {
            $email = $request->input('email');
            $emailTag = explode('@', $email);
            $password = $request->input('password');

            $newUser = User::create([
                'name' => $emailTag[0],
                'email' => $email,
                'password' => bcrypt($password)
            ]);

            auth()->login($newUser);

            return redirect('home');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
}
