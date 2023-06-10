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

Route::get('/test', function () {
    $user = \App\Models\User::first();
    return view('mail.email-confirmation', [
        'name' => $user->name,
        'token' => $user->confirmation_token,
    ]);
});

Route::get('/', HomeController::class);

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/email-confirmation/{hash}', \App\Http\Controllers\UserEmailConfirmationController::class);

Route::post('/signup', UserSignupController::class);
Route::post('/authenticate', UserAuthenticateController::class);
Route::post('/logout', UserLogoutController::class);
