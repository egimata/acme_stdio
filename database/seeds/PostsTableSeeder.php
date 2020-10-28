<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category1 = Category::create([
            'name' => 'Print Digital',
            'image' => 'posts/cat1.jpg'
        ]);
        $category2 = Category::create([
            'name' => 'Printime në Formate të Mëdha',
            'image' => 'posts/cat2.jpg'
        ]);
        $category3 = Category::create([
            'name' => 'Materiale Promocioni',
            'image' => 'posts/cat3.jpg'
        ]);
        $category4 = Category::create([
            'name' => 'Design',
            'image' => 'posts/cat4.jpg'
        ]);

        $post1 = Post::create([

            'title' => 'Kartvizita',
            'description' => 'kot',
            'content' => 'kot',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg'

        ]);

        $post2 = Post::create([

            'title' => 'Broshura',
            'description' => 'kot',
            'content' => 'kot',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'

        ]);

        $post3 = Post::create([

            'title' => 'Fletepalosje',
            'description' => 'kot',
            'content' => 'kot',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'

        ]);

        $post4 = Post::create([

            'title' => 'Leter Murale',
            'description' => 'kot',
            'content' => 'kot',
            'category_id' => $category4->id,
            'image' => 'posts/4.jpg'

        ]);
    }
}
