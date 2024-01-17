<?php

use App\Models\User;
use App\Models\Podcast;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PodcastLikeController;
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
Route::get('/podcasts/{podcast:slug}', [PodcastController::class, 'show'])->name('podcast');

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
    return view('authorpodcast', [
        'title' => "Podcast by : $author->name",
        'podcasts' => $author->podcasts,
        'author' => $author
    ]);
})->name('author');

Route::get('/misteri', function () {
    return view('misteri', [
        "title" => "Misteri",
        "podcasts" => Podcast::where('category_id', 1)->get()
    ]);
});

//untuk comment dari CommentController
Route::post('/podcasts/{podcast:slug}/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');

//untuk cari podcast

Route::get('/podcasts', [PodcastController::class, 'tampil']);

Route::get('/supranatural', function () {
    return view('supranatural', [
        "title" => "Supernatural",
        "podcasts" => Podcast::where('category_id', 2)->get()
    ]);
});

Route::get('/thriller', function () {
    return view('thriller', [
        "title" => "Thriller",
        "podcasts" => Podcast::where('category_id', 4)->get()
    ]);
});

//cari
Route::get('/cari', function (Category $category) {
    return view('search', [
        'title' => "Search",
    'categories' => Category::all()
    ]);
});

//profile
Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "user" => auth()->user()
    ]);
})->middleware('auth');

Route::get("/search",[PodcastController::class,'search']);

//login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

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


Route::get('/dashboard/podcasts/checkSlug', [DashboardPodcastController::class, 'checkSlug'])->middleware('auth');
//dashboard podcast route resource  
Route::resource('/dashboard/podcasts', DashboardPodcastController::class)->middleware('auth');

//forgot password
Route::get('/forgot-password', function () {
    return view('forgotpassword.index');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

//reset password
Route::get('/reset-password/{token}', function ($token) {
    return view('forgotpassword.resetpassword', ['token' => $token]);
})->middleware('guest')->name('password.reset');

//reset password post
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

//like pake controller LikeController
Route::post('/podcasts/{podcast:slug}/like', [PodcastLikeController::class, 'like'])->name('podcast.like')->middleware('auth');
//unlike
Route::post('/podcasts/{podcast:slug}/unlike', [PodcastLikeController::class, 'unlike'])->name('podcast.unlike')->middleware('auth');

//follow dan unfollow
Route::post('/authors/{author:username}/follow', [FollowerController::class, 'follow'])->name('author.follow')->middleware('auth');
Route::post('/authors/{author:username}/unfollow', [FollowerController::class, 'unfollow'])->name('author.unfollow')->middleware('auth');

//playlist route resource
Route::resource('/playlists', PlaylistController::class)->middleware('auth');
