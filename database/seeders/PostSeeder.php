<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 10; $i++) { 
            $post =new Post();
            $post->title = $faker->sentence(4);
            $post->content = $faker->text(400);
            $post->image = $faker->imageUrl(600, 400, 'animals', true);
            $post->save();
       } 
    }
}
