<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiantBlog extends Model
{
    function giant(){
        return $this->belongsTo(Giant::class);
    }
    function giantBlogPhoto(){
        return $this->hasMany(giantBlogPhoto::class);
    }
}
