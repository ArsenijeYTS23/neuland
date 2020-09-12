<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWatchLater extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }
}
