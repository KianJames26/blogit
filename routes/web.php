<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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

Route::get('/', function () {
    return view('pages.landing');
});

//? LOGIN ROUTES
Route::get('/login', [LoginController::class, 'index'])->name('login.form');
//? SIGNUP ROUTES
Route::get('/signup', [SignupController::class, 'index'])->name('signup.form');
Route::post('/signup', [SignupController::class, 'store']);
