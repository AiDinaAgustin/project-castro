<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Podcast extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author() //ini diubah dari user menjadi author agar lebih mudah dipahami, karena user disini adalah author
    {
        return $this->belongsTo(User::class, 'user_id'); //pengubahan ini dilakukan agar sesuai saja dengan author yang dicari, karena secara default laravel akan mencari user_id di tabel users
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function likes(){
        return $this->belongsToMany(User::class, 'podcast_like')->withTimestamps();
    }

    //buatkan untuk hubungan dengan playlistPodcasts
    public function playlistPodcasts()
    {
        return $this->hasMany(PlaylistPodcast::class);
    }
}
