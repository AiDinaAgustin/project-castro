<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        return view('podcasts', [
            "title" => "Podcast",
            "podcasts" => Podcast::all()
        ]);
    }

    public function show($slug)
    {
        return view('podcast', [
            "title" => "Single Podcast",
            "podcast" => Podcast::find($slug)
        ]);
    }
}
