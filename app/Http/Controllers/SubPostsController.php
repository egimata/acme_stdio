<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\SubPost;
use App\Http\Requests\SubPosts\CreateSubPostsRequest;
use App\Http\Requests\SubPosts\UpdateSubPostsRequest;

class SubPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subposts.index')->with('subposts', SubPost::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subposts.create')->with('posts', Post::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSubPostsRequest $request)
    {
        // upload image to db

        // Storage::disk('public')->putFile('folders/inside/public', $request->file('post_image'));

        $image = $request->image->store('posts', 'public');

        // create the post

        $subpost = SubPost::create([
            'title' => $request->title,

            'image' => $image,

            'published_at' => $request->published_at,

            'post_id' => $request->post
        ]);


        //flash message

        session()->flash('success', 'SubPost Created Successfully');

        //redirect
        return redirect(route('subposts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubPost $subpost)
    {
        return view('posts_cat.show')->with('subpost', $subpost)->with('subposts', SubPost::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubPost $subpost)

    {
        return view('subposts.create')->with('subpost', $subpost)->with('posts', Post::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubPostsRequest $request, SubPost $subpost)
    {

        $data = $request->only(['title', 'published_at',]);

        //check if new image

        if ($request->hasFile('image')) {

            //upload it
            $image = $request->image->store('posts', 'public');

            //delete old one
            $subpost->deleteImage();

            $data['image'] = $image;
        }

        //update attributes

        $subpost->update($data);

        //flash session

        session()->flash('success', 'SubPost Updated Successfully');


        return redirect(route('subposts.index'));

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
        $subpost = SubPost::withTrashed()->where('id', $id)->firstOrFail();

        if ($subpost->trashed()) {

            //removes image file from storage when deleted
            $subpost->deleteImage();

            $subpost->forceDelete();
        }

        else {
            $subpost->delete();
        }


        session()->flash('success', 'SubPost Moved to Trash');

        return redirect(route('trashed-subposts.index'));
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
        $trashed = SubPost::onlyTrashed()->get();
        //withPosts gets everything after with-> (same as with ('posts', $trashed))
        return view('subposts.index')->withSubPosts($trashed);

    }

    public function restore($id)
    {
        $subpost = SubPost::withTrashed()->where('id', $id)->firstOrFail();

        $subpost->restore();

        session()->flash('success', 'SubPost is Restored Successfully!');

        return redirect()->back();

    }
}
