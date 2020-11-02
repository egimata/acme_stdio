<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\SubPost;
use App\Single;

class ProductCatController extends Controller
{
    public function show(Post $post) {
        // $data = SubPost::where('id', subpost);

        // return view('posts_cat.show')
        //     ->with('post', $post)
        //     ->with('subpost', $subpost)
        //     ->with('subposts', SubPost::where('id', subpost));

        return view('posts_cat.show')->with('post', $post)->with('subposts', $post->subposts()->simplePaginate(9));

    }

    public function single(SubPost $subpost ){
        return view('single_post.single')->with('subpost', $subpost)->with('singles', $subpost->singles()->simplePaginate(20));
    }

    public function category(Category $category) {

        return view('product_cat.design')->with('category', $category)->with('posts', $category->posts()->simplePaginate(9));
    }

    public function category1(Category $category) {

        return view('blog.category')->with('category', $category)->with('posts', $category->posts()->simplePaginate(9));
    }
}

