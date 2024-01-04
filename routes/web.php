<?php

use App\Models\Podcast;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodcastController;
use App\Models\Category;
use App\Models\User;

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

//halaman user orang
Route::get('/authors/{user:username}', function (User $user) {
    return view('author', [
        'title' => "Podcast by Author : $user->name",
        'podcasts' => $user->podcasts,
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

//cari
Route::get('/cari', function (Category $category) {
    return view('search', [
        'title' => "Search",
        'categories' => Category::all()
    ]);
});


