<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsCatController extends Controller
{
    public function post(Post $post) {

        return view('posts_cat.post')->with('post', $post);

    }

    public function category(Category $category) {

        return view('');
    }
}
