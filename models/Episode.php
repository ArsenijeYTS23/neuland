<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
   function serie(){
        return $this->belongsTo(Serie::class);
    }
}
