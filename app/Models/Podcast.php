<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author() //ini diubah dari user menjadi author agar lebih mudah dipahami, karena user disini adalah author
    {
        return $this->belongsTo(User::class, 'user_id'); //pengubahan ini dilakukan agar sesuai saja dengan author yang dicari, karena secara default laravel akan mencari user_id di tabel users
    }
}
