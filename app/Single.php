<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Single extends Model
{
    protected $fillable = [

        'sub_title', 'image', 'sub_post_id',
    ];

    public function deleteImage()

    {

        File::delete('storage/'.$this->image);

    }

    public function subpost()
    {
        return $this->belongsTo(SubPost::class);
    }



    /**
     *
     *
     * check if post has tags
     *
     * @return bool
    */

}
