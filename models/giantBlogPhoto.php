<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giantBlogPhoto extends Model
{
   function giant(){
        return $this->belongsTo(GiantBlog::class);
    }
}
