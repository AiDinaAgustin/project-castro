<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistPodcast extends Model
{
    use HasFactory;

    //Tentukan relasi belongsTo ke model Playlist
    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }

    //Tentukan relasi belongsTo ke model Podcast
    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }
}
