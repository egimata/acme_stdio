<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\SubPost;
use App\Single;


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

        $subpost1 = SubPost::create([
            'title' => 'Kartvizita 1',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost2 = SubPost::create([
            'title' => 'Kartvizita 2',
            'post_id' => $post2->id,
            'image'=> 'posts/sub2.jpg',
        ]);
        $subpost3 = SubPost::create([
            'title' => 'Kartvizita 3',
            'post_id' => $post1->id,
            'image'=> 'posts/sub3.jpg',
        ]);
        $subpost4 = SubPost::create([
            'title' => 'Kartvizita 4',
            'post_id' => $post1->id,
            'image'=> 'posts/sub4.jpg',
        ]);
        $subpost5 = SubPost::create([
            'title' => 'Kartvizita 5',
            'post_id' => $post2->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost6 = SubPost::create([
            'title' => 'Kartvizita 6',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost7 = SubPost::create([
            'title' => 'Kartvizita 7',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost8 = SubPost::create([
            'title' => 'Kartvizita 8',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost9 = SubPost::create([
            'title' => 'Kartvizita 9',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost10 = SubPost::create([
            'title' => 'Kartvizita 10',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost11 = SubPost::create([
            'title' => 'Kartvizita 11',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost12 = SubPost::create([
            'title' => 'Kartvizita 12',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost13 = SubPost::create([
            'title' => 'Kartvizita 13',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost14 = SubPost::create([
            'title' => 'Kartvizita 14',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost15 = SubPost::create([
            'title' => 'Kartvizita 15',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost16 = SubPost::create([
            'title' => 'Kartvizita 16',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost17 = SubPost::create([
            'title' => 'Kartvizita 17',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost18 = SubPost::create([
            'title' => 'Kartvizita 18',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost19 = SubPost::create([
            'title' => 'Kartvizita 19',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost20 = SubPost::create([
            'title' => 'Kartvizita 20',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $subpost21 = SubPost::create([
            'title' => 'Kartvizita 21',
            'post_id' => $post1->id,
            'image'=> 'posts/sub1.jpg',
        ]);
        $single1 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single2 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single3 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single4 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single5 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single6 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single7 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single8 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single9 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        $single10 = Single::create([
            'sub_title' => 'Kartvizita 21',
            'sub_post_id' => $subpost1->id,
            'image'=> 'gallery/sub1.jpg',
        ]);
        
    }
}
