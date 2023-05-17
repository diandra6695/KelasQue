<?php

use Illuminate\Support\Facades\Route;

// controller


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\KelasQue@landing');

Route::get('/home', 'App\Http\Controllers\KelasQue@home');

