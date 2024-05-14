<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = config('comics.posts');

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->body = $post['body'];
            $newPost->save();
        }
    }
}
