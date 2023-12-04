<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('pages.login.index');
    }
    public function authenticate(Request $request){

        $validated = $request;

        $loginKey = $validated->username;
        $loginKeyField = filter_var($loginKey, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';


        $credentials = [$loginKeyField => $loginKey, 'password' => $validated->password];

        if(Auth::attempt($credentials, $validated->remember)){
            $request->session()->regenerate();
            return redirect()->route('blog.index');
        }else{
            return redirect()->back()->withErrors(['username'=>'Invalid Login Credentials'])->withInput(request()->parameters);
        }

    }
}
