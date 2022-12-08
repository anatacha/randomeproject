<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RandomnumController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('storetotable',[RandomnumController::class,'store']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
