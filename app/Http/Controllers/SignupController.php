<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\AlphaSymbols;
use App\Rules\Username;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(){
        return view('pages.signup.index');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'first_name' => ['required', 'min:2', 'max:30', new AlphaSymbols],
            'last_name' => ['required', 'min:2', 'max:30', new AlphaSymbols],
            'username' =>['required', 'unique:users,username', 'min:5', 'max:20', new Username],
            'email' =>['required', 'unique:users,email'],
            'password' =>['required', 'min:8', 'confirmed'],
        ]);

        $users = User::create($validated);

        return redirect()->route('login.form');
    }
}
