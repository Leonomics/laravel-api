<?php

use App\Tag;
use App\Category;
use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $categoryIds = Category::all()->pluck('id'); //[1,2,3,4,5,6]
        $tags = Tag::all()->pluck('id');

        for ($i = 0; $i < 50; $i++) {
            $post = new Post();
            $post->title = $faker->words(rand(5, 10), true);
            $post->content = $faker->paragraphs(rand(10, 20), true);
            $post->slug = Str::slug($post->title);
            $post->category_id = $faker->optional()->randomElement($categoryIds);

            $post->save();

            $tagIds = $tags->shuffle()->take(3)->all();
            $post->tags()->sync($tagIds);
        }
    }
}
