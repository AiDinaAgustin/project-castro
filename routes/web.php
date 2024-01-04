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

$blog_podcast = [
    [ 
        "title" => "Podcast Pertama",
        "slug" => "podcast-pertama",
        "author" => "Rizky",
        "body" => "Lorem ipsum dolor sit amet consectetur"
    ],
    [
        "title" => "Podcast Kedua",
        "slug" => "podcast-kedua",
        "author" => "Dina",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa at sed magnam ratione, dolorum vero dolorem dicta quisquam non quod perspiciatis nobis impedit obcaecati suscipit sapiente! Et beatae ipsa minima consequuntur similique soluta possimus enim natus, ea rerum molestiae dicta qui obcaecati doloremque delectus iure totam omnis dolor atque tempora ratione dolorum nam. Quisquam voluptates quibusdam dolore rem voluptatibus! Minima, beatae quisquam quam cupiditate in voluptatum non accusamus corrupti ratione sit quasi saepe obcaecati reiciendis, itaque quo molestiae sequi necessitatibus?"
    ],
    
];

Route::get('/', [PodcastController::class, 'index']);

//halaman single podcast
Route::get('/{podcast:slug}', [PodcastController::class, 'show']);

//route category
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => "Podcast by Category : $category->name",
        'podcasts' => $category->podcasts,
        'category' => $category->name
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


