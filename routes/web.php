<?php

use App\Http\Controllers\AccountController;
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
    //? DEFAULT ROUTE
    Route::get('/', function () {
        return view('pages.landing');
    });

    //? LOGIN ROUTES
    //* Login Form
    Route::get('/login', [LoginController::class, 'index'])->name('login.form');
    //* Login Authentication
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authentication');

    //? SIGNUP ROUTES
    //* Sign Up Form
    Route::get('/signup', [SignupController::class, 'index'])->name('signup.form');
    //* Sign Up User
    Route::post('/signup', [SignupController::class, 'store'])->name('signup.create');
});

Route::middleware(['auth', 'auth.basic'])->group(function () {
    //? LOGOUT ROUTE
    Route::post('/logout', function(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->flash('toast', 'You have been logged out!');
        return redirect()->route('login.form');
    });

    //? BLOG ROUTES
    //* Create Blog
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
    //* Store Blog
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('blog.store');
    //* Index Blogs
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
    //* Show Blog
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.show');

    //? ACCOUNT ROUTE
    //* Show Account
    Route::get('/account/{id}', [AccountController::class, 'show'])->name('account.show')->middleware('checkUserId');
});

