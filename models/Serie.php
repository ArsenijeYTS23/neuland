<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
   function program(){
        return $this->belongsTo(Program::class);
    }
      function episode(){
         return $this->hasMany(Episode::class);
    }
}
