<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

class SubPost extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'title', 'published_at', 'post_id', 'image',
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

    public function singles()
    {
        return $this->hasMany(Single::class);
    }

    /**
     *
     *
     * check if post has tags
     *
     * @return bool
    */
}
