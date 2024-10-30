<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('kontaks', KontakController::class);

Route::get('about', function () {
    return view('about');
});
