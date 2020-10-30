<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\SubPost;

class ProductCatController extends Controller
{
    public function show(Subpost $subpost, $id) {
        // $data = SubPost::where('id', subpost);

        // return view('posts_cat.show')
        //     ->with('post', $post)
        //     ->with('subpost', $subpost)
        //     ->with('subposts', SubPost::where('id', subpost));
     
        return view('posts_cat.show')
        // ->with('post', $post)
        ->with('subpost', $subpost)
        ->with('subposts', SubPost::all()->where('post_id', $id));

    }

    public function single($id){
        return view('single_post.single')->with('subposts', SubPost::all()->where('subpost_id', $id));
    }

    public function category(Category $category) {

        return view('product_cat.design')->with('category', $category)->with('posts', $category->posts()->simplePaginate(9));
    }

    public function category1(Category $category) {

        return view('blog.category')->with('category', $category)->with('posts', $category->posts()->simplePaginate(9));
    }
}

