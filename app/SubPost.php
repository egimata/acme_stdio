<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

class SubPost extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'title', 'image', 'published_at', 'post_id',
    ];

    /**
     *
     *
     * deletes the post image from storage
     *
     * @return void
    */


    public function deleteImage()

    {

        File::delete('storage/'.$this->image);

    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     *
     *
     * check if post has tags
     *
     * @return bool
    */
}
