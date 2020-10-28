<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Posts\CreatePostsRequest;
use App\Post;
use App\Tag;
use App\Category;
use App\Http\Requests\Posts\UpdatePostRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostsRequest $request)
    {
        // upload image to db

        // Storage::disk('public')->putFile('folders/inside/public', $request->file('post_image'));

        $image = $request->image->store('posts', 'public');

        // create the post

        $post = Post::create([
            'title' => $request->title,

            'description' => $request->description,

            'content' => $request->content,

            'image' => $image,

            'published_at' => $request->published_at,

            'category_id' => $request->category
        ]);

        if ($request->tags){

            $post->tags()->attach($request->tags);

        }

        //flash message

        session()->flash('success', 'Post Created Successfully');

        //redirect
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)

    {
        return view('posts.create')->with('post', $post)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {

        $data = $request->only(['title', 'description', 'published_at', 'content']);

        //check if new image

        if ($request->hasFile('image')) {

            //upload it
            $image = $request->image->store('posts', 'public');

            //delete old one
            $post->deleteImage();

            $data['image'] = $image;
        }

        if ($request->tags)
        {
            $post->tags()->sync($request->tags);
        }

        //update attributes

        $post->update($data);

        //flash session

        session()->flash('success', 'Post Updated Successfully');


        return redirect(route('posts.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // ifit doesnt find record it takes to 404 (firstorfail)
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if ($post->trashed()) {

            //removes image file from storage when deleted
            $post->deleteImage();

            $post->forceDelete();
        }

        else {
            $post->delete();
        }


        session()->flash('success', 'Post Moved to Trash');

        return redirect(route('trashed-posts.index'));
    }

    /**
     * Diplsay trashed posts
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function trashed()
    {

        //fetches all posts
        $trashed = Post::onlyTrashed()->get();
        //withPosts gets everything after with-> (same as with ('posts', $trashed))
        return view('posts.index')->withPosts($trashed);

    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        $post->restore();

        session()->flash('success', 'Post is Restored Successfully!');

        return redirect()->back();

    }
}
