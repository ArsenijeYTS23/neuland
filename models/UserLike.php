<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLike extends Model
{
   function user(){
        return $this->belongsTo(User::class);
    }
}
