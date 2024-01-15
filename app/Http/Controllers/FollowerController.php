<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function follow(User $author){
        $follower = auth()->user();

        $follower->followings()->attach($author->id);

        return redirect()->route('author', $author->username)->with('success', 'You are now following this user');
    }

    public function unfollow(){

    }
}
