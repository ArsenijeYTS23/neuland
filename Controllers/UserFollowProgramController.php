<?php

namespace App\Http\Controllers;
use App\UserFollowProgram;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserFollowProgramController extends Controller
{
  function follow($id){
      $userFollowProgram= new UserFollowProgram;
      $userFollowProgram->user_id=Auth::user()->id;
      $userFollowProgram->program_id=$id;
      $userFollowProgram->save();
      
    }
    function unfollow($id){
        UserFollowProgram::where('program_id',$id)
                ->where('user_id',Auth::user()->id)
                ->delete();
    }
}
