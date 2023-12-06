<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function show($id){
        $account = User::findOrFail($id);
        return view('pages.account.show', ['user' => Auth::user(), 'account' => $account, 'blogs'=> $account->blogs]);
    }
}
