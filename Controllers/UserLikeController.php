<?php

namespace App\Http\Controllers;
use App\UserLike;
use App\Episode;
use App\GiantVideoTask;
use App\GiantBlog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserLikeController extends Controller
{
    function like($id,$type){
        if($type=='episode'){
         Episode::where('id',$id)
                ->increment('totalLikes');   
        }elseif($type=='giantVideoTask'){
            GiantVideoTask::where('id',$id)
                ->increment('totalLikes');    
        }else{
             GiantBlog::where('id',$id)
                ->increment('totalLikes');  
        }
        
      $userLike= new UserLike;
      $userLike->user_id=Auth::user()->id;
      $userLike->video_id=$id;
      $userLike->type=$type;
      $userLike->save();
      
    }
     function unlike($id,$type){
          if($type=='episode'){
         Episode::where('id',$id)
                ->decrement('totalLikes');   
        }elseif($type=='giantVideoTask'){
            GiantVideoTask::where('id',$id)
                ->decrement('totalLikes');    
        }else{
             GiantBlog::where('id',$id)
                ->decrement('totalLikes');  
        }
        
      UserLike::where('video_id',$id)
              ->where('user_id',Auth::user()->id)
              ->where('type',$type)
              ->delete();
      
    }
}
