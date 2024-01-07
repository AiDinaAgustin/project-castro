<?php

use App\Models\User;
use App\Models\Podcast;
use App\Models\Category;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPodcastController;

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
Route::get('/authors/{author:username}', function (User $author) {
    return view('author', [
        'title' => "Podcast by Author : $author->name",
        'podcasts' => $author->podcasts,
    ]);
});

Route::get('/misteri', function () {
    return view('misteri', [
        "title" => "Misteri"
    ]);
});

//untuk cari podcast

Route::get('/podcasts', [PodcastController::class, 'tampil']);

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

Route::get("/search",[PodcastController::class,'search']);

//login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

//register menampilkan halaman register
Route::get('/register', [RegisterController::class, 'index']);

//register post data
Route::post('/register', [RegisterController::class, 'store']);

//login post data
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

//dashboard podcast route resource  
Route::resource('/dashboard/podcasts', DashboardPodcastController::class)->middleware('auth');




