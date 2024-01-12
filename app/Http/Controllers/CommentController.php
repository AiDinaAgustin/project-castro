<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function store(Podcast $podcast){
        $user = Auth::user();

        $comment = new Comment();
        $comment->podcast_id = $podcast->id;
        $comment->user_id = $user->id;
        $comment->content = request()->get('content');
        $comment->save();

        return redirect()->route('podcast', $podcast->slug)->with('success', "Comment posted successfully!");
    }
}
