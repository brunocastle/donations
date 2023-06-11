<?php

    use App\Http\Controllers\DonateController;
    use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthenticateController;
use App\Http\Controllers\UserEmailConfirmationController;
use App\Http\Controllers\UserLogoutController;
use App\Http\Controllers\UserSignupController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

//Route::get('/test', function () {
//
//});

// Página Principal
Route::get('/', HomeController::class);

// Cadastro e Autenticação
Route::view('/signup', 'signup');
Route::post('/signup', UserSignupController::class);
Route::get('/email-confirmation/{hash}', UserEmailConfirmationController::class);
Route::view('/login', 'login');
Route::post('/authenticate', UserAuthenticateController::class);
Route::post('/logout', UserLogoutController::class);

// Pedidos
Route::get('/requests/{id}', [RequestController::class, 'show']);

// Doações
Route::get('/donate/{requestId}', DonateController::class);
