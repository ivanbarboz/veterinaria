<?php

use App\Http\Controllers\ClaimController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario-reclamos', [ClaimController::class, 'index']);

Route::post('/register-claim', [ClaimController::class, 'store'])->name('register-claim');