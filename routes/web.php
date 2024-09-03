<?php

use App\Http\Controllers\ClaimController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/claim-form', [ClaimController::class, 'index'])->name('claim-form');

Route::post('/register-claim', [ClaimController::class, 'store'])->name('register-claim');


Route::get('login', function () {
    return view('auth.login');
})->name('login');


Route::get('reclamo', function () {
    return view('auth.reclamo');
})->name('register');



