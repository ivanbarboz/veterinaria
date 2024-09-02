<?php

use App\Http\Controllers\ClaimController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario-reclamos', [ClaimController::class, 'index']);

Route::post('/register-claim', [ClaimController::class, 'store'])->name('register-claim');





///
// routes/web.php

use App\Http\Controllers\ReclamoController;

Route::get('login', function () {
    return view('auth.login');
})->name('login');


Route::get('reclamo', function () {
    return view('auth.reclamo');
})->name('register');



