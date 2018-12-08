<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            \App\Post::create([
                'title' => $faker->unique()->text(10),
                'content' => $faker->text,
            ]);
        }
    }
}
