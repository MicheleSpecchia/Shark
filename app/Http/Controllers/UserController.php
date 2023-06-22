<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //Show register create form
    public function create()
    {
        return view('users.register');
    }

    //Create new users
    public function store(Request $request)
    {
        $form_field = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $form_field['password'] = bcrypt($form_field['password']);

        $user = User::create($form_field);

        auth()->login($user);

        return redirect('/')->with('message', 'user created and logged in');
    }

    //logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'you have been logged out!');
    }

    //login
    public function login(Request $request)
    {
        return view('users.login');
        return redirect('/')->with('message', 'you have been logged out!');
    }

    public function authenticate(Request $request)
    {
        $form_field = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($form_field)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'you are logged in');
        }


        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput();
    }
}
