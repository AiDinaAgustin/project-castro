<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Tentukan relasi hasMany dengan model PlaylistPodcast.
    public function playlistPodcasts()
    {
        return $this->hasMany(PlaylistPodcast::class);
    }
}
