<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('pages.landing');
    });

    //? LOGIN ROUTES
    Route::get('/login', [LoginController::class, 'index'])->name('login.form');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authentication');
    //? SIGNUP ROUTES
    Route::get('/signup', [SignupController::class, 'index'])->name('signup.form');
    Route::post('/signup', [SignupController::class, 'store'])->name('signup.create');
});

Route::middleware(['auth', 'auth.basic'])->group(function () {
    Route::post('/logout', function(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.form');
    });
    //? BLOG ROUTES
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.show');
});

