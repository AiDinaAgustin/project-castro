<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Podcast;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create(
        //     [
        //         'name' => 'Dina',
        //         'password' => bcrypt('password'),
        //         'email' => 'aidina@gmail.com'
        //     ]
        // );
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create(
            [
                'name' => 'Mistis',
                'slug' => 'mistis'
            ]
        );

        Category::create(
            [
                'name' => 'Kisah Nyata',
                'slug' => 'kisah-nyata'
            ]
        );

        // Category::create(
        //     [
        //         'name' => 'Thriller',
        //         'slug' => 'thriller'
        //     ]
        // );

        // Podcast::factory(30)->create();

        // User::create(
        //     [
        //         'name' => 'Dina',
        //         'password' => bcrypt('password'),
        //         'email' => 'aidina@gmail.com'
        //     ]
        // );

        // Podcast::create(
        //     [
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'title' => 'Web Development',
        //         'slug' => 'web-development',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     ]
        // );
    }
}
