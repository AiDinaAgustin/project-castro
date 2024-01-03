<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    //untuk halaman seluruh podcast
    public function index()
    {
        return view('podcasts', [
            "title" => "Podcast",
            "podcasts" => Podcast::all()
        ]);
    }

    //untuk halaman single podcast
    public function show($slug)
    {
        return view('podcast', [
            "title" => "Single Podcast",
            "podcast" => Podcast::find($slug)
        ]);
    }
}
