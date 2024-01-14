<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastLikeController extends Controller
{
    public function like(Podcast $podcast){
        $liker = auth()->user();

        $liker->likes()->attach($podcast);

        return redirect()->route('podcast', $podcast->slug)->with('success', 'Liked successfully');
    }

    public function unlike(Podcast $podcast){
        $liker = auth()->user();

        $liker->likes()->detach($podcast);

        return redirect()->route('podcast', $podcast->slug)->with('success', 'Unliked successfully');
        
    }
}
