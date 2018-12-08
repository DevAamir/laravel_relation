<?php

use Illuminate\Database\Seeder;

use App\Comment;
use App\Post;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $allVideos = Post::get();
        foreach ($allVideos as $video) {
            $faker = Faker::create();
            $limit = 10;
            for ($i = 0; $i < $limit; $i++) {
                $fakeCom[] = new Comment(['body' => $faker->unique()->text(10),]);
            }
            $video->comments()->saveMany($fakeCom);
            $fakeCom = [];
        }
    }
}
