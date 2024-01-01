<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('podcasts');
});

Route::get('/podcast', function () {
    return view('podcasts');
});

Route::get('/misteri', function () {
    return view('misteri');
});

Route::get('/supranatural', function () {
    return view('supranatural');
});

Route::get('/thriller', function () {
    return view('thriller');
});


