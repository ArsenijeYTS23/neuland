<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
   function giant(){
         return $this->hasMany(Giant::class);
    }
    function serie(){
          return $this->hasOne(Serie::class);
    }
    function user(){
        return $this->belongsToMany(User::class, 'user_follow_programs');
    }
}
