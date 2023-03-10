<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:6|confirmed',
            'remember_token' => Str::random(10)
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $formFields['remember_token'] = Str::random(10);

        $user = User::create($formFields);

        

        auth()->login($user);
        // $user = User::all();

        return redirect('/')->with('message', 'User has been created and logged in!');
    }

    
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            
            return redirect('/')->with('message', 'You are logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function user($user) {
        return view('users.public_user', ['user'=>$user]);
    }
}