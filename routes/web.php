<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

Route::get('/login', [Login::class, 'login'])
->name('login');
Route::post('/valida', [Login::class, 'valida'])
->name('valida');