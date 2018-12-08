<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
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
            \App\Video::create([
                'body' => $faker->unique()->text(50),
            ]);
        }
    }
}
