<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/password-reset', function () {
    return view('auth.password-reset.send-email');
})->name('password.reset');
