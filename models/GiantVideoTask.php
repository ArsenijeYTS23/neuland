<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiantVideoTask extends Model
{
  function giant(){
        return $this->belongsTo(Giant::class);
    }
}
