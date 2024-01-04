<?php

use App\Models\Podcast;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodcastController;
use App\Models\Category;

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

Route::get('/', [PodcastController::class, 'index']);

//halaman single podcast
Route::get('/podcasts/{podcast:slug}', [PodcastController::class, 'show']);

//route category
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => "Podcast by Category : $category->name",
        'podcasts' => $category->podcasts,
        'category' => $category->name
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


