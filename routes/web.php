<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthenticateController;
use App\Http\Controllers\UserLogoutController;
use App\Http\Controllers\UserSignupController;
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

Route::get('/', HomeController::class);

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', UserSignupController::class);
Route::post('/authenticate', UserAuthenticateController::class);
Route::post('/logout', UserLogoutController::class);
