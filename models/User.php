<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
     function program(){
        return $this->belongsToMany(Program::class, 'user_follow_programs');
    }
    function userFollowProgram(){
        return $this->hasMany(UserFollowProgram::class);
    }
    function userWatchLater(){
        return $this->hasMany(UserWatchLater::class);
    }
    function userLike(){
        return $this->hasMany(UserLike::class);
    }
}
