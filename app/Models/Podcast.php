<?php

namespace App\Models;


class Podcast 
{
    private static $blog_podcast = [
        [ 
            "title" => "Podcast Pertama",
            "slug" => "podcast-pertama",
            "author" => "Rizky",
            "body" => "Lorem ipsum dolor sit amet consectetur"
        ],
        [
            "title" => "Podcast Kedua",
            "slug" => "podcast-kedua",
            "author" => "Dina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa at sed magnam ratione, dolorum vero dolorem dicta quisquam non quod perspiciatis nobis impedit obcaecati suscipit sapiente! Et beatae ipsa minima consequuntur similique soluta possimus enim natus, ea rerum molestiae dicta qui obcaecati doloremque delectus iure totam omnis dolor atque tempora ratione dolorum nam. Quisquam voluptates quibusdam dolore rem voluptatibus! Minima, beatae quisquam quam cupiditate in voluptatum non accusamus corrupti ratione sit quasi saepe obcaecati reiciendis, itaque quo molestiae sequi necessitatibus?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_podcast);
    }

    public static function find($slug)
    {
       $podcasts = static::all();
    
        return $podcasts->firstWhere('slug', $slug);
    }
}
