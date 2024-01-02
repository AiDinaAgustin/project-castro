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
    return view('podcasts', [
        "title" => "Podcast"
    ]);
});

Route::get('/podcast', function () {
    return view('podcasts', [
        "title" => "Podcast"
    ]);
});

Route::get('/misteri', function () {
    return view('misteri', [
        "title" => "Misteri"
    ]);
});

Route::get('/supranatural', function () {
    return view('supranatural', [
        "title" => "Supranatural"
    ]);
});

Route::get('/thriller', function () {
    return view('thriller', [
        "title" => "Thriller"
    ]);
});


