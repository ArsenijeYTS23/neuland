<?php

namespace App\Http\Controllers;
use App\UserWatchLater;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserWatchLaterController extends Controller
{
    function watch($id,$type){
      $userWatchLater= new UserWatchLater;
      $userWatchLater->user_id=Auth::user()->id;
      $userWatchLater->video_id=$id;
      $userWatchLater->type=$type;
      $userWatchLater->save();
      
    }
    function dont($id,$type){
      UserWatchLater::where('video_id',$id)
              ->where('user_id',Auth::user()->id)
              ->where('type',$type)
              ->delete();
      
    }
}
