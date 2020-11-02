<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Single\CreateSingleRequest;
use App\Http\Requests\Single\UpdateSingleRequest;
use App\Single;
use App\SubPost;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('single.index')->with('single', Single::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('single.create')->with('subposts', SubPost::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSingleRequest $request)
    {
        // upload image to db

        // Storage::disk('public')->putFile('folders/inside/public', $request->file('post_image'));

        $image = $request->image->store('gallery', 'public');



        // create the post

        $single = Single::create([
            'sub_title' => $request->title,

            'image' => $image,

            'sub_post_id' => $request->subpost
        ]);


        //flash message

        session()->flash('success', 'Image Stored Successfully');

        //redirect
        return redirect(route('single.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Single $single)
    {
        return view('single_post.single')->with('single', $single)->with('singles', Single::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Single $single)

    {
        return view('single.create')->with('single', $single)->with('subposts', SubPost::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSingleRequest $request, Single $single)
    {

        $data = $request->only(['sub_title']);

        //check if new image

        if ($request->hasFile('image')) {

            //upload it
            $image = $request->image->store('gallery', 'public');

            //delete old one
            $post->deleteImage();

            $data['image'] = $image;
        }

        //update attributes

        $post->update($data);

        //flash session

        session()->flash('success', 'Image Created Successfully');


        return redirect(route('single.index'));

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
        $single = Single::findOrFail($id);

        if(Storage::delete($single->filename)){
            $single->delete();
        }
        // if ($single->trashed()) {

        //     //removes image file from storage when deleted
        //     $single->deleteImage();

        //     $single->forceDelete();
        // }

        // else {
        //     $single->delete();
        // }


        session()->flash('success', 'Image Deleted');

        return redirect(route('single.index'));
    }

    /**
     * Diplsay trashed posts
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function trashed()
    // {

    //     //fetches all posts
    //     $trashed = Post::onlyTrashed()->get();
    //     //withPosts gets everything after with-> (same as with ('posts', $trashed))
    //     return view('posts.index')->withPosts($trashed);

    // }

    // public function restore($id)
    // {
    //     $post = Post::withTrashed()->where('id', $id)->firstOrFail();

    //     $post->restore();

    //     session()->flash('success', 'Post is Restored Successfully!');

    //     return redirect()->back();

    // }
}
