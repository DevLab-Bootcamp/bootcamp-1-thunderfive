<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::view('/auth', 'template.auth');
route::view('/auth-login', 'auth.login');

route::post('login', [AuthenticationController::class, 'loginProcess'])->name('auth.login-process');