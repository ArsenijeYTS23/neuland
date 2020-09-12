<?php

namespace App\Http\Controllers;
use App\Episode;
use App\GiantBlog;
use App\GiantVideoTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/* models */
use App\User;

class UserController extends Controller
{
    public function authenticate(Request $request) {
        $user = User::where('code', $request->code)->first();
        if($user){
            Auth::login($user);
         //   return "hello smoker";
            return redirect()->intended('/');
        } else {
            $messages = [
                [
                    'type'  => 'error',
                    'txt'   => 'Wrong code.'
                ]
            ];
            return compact('messages');
            return redirect()->back()->with(compact('messages'));
        }
        return \Request::all();
    }
    function index(){
        $allLiked=Auth::user()->userLike;
       foreach($allLiked as $svi){
           if($svi->type=='episode'){
            $box[]=Episode::where('id',$svi->video_id)->first();
           }
           if($svi->type=='giantBlog'){
            $box[]=GiantBlog::where('id',$svi->video_id)->first();
           }
           if($svi->type=='giantVideoTask'){
            $box[]=GiantVideoTask::where('id',$svi->video_id)->first();
           }
       }
      if(request()->sort=='old'){
        $liked=collect($box)->sortBy('created_at')->values();
      }else{
        $liked=collect($box)->sortByDesc(request()->sort)->values();
      } 
       $allWatch=Auth::user()->userWatchLater;
       foreach($allWatch as $all){
           if($all->type=='episode'){
            $boxW[]=Episode::where('id',$all->video_id)->first();
           }
           if($all->type=='giantBlog'){
            $boxW[]=GiantBlog::where('id',$all->video_id)->first();
           }
           if($all->type=='giantVideoTask'){
            $boxW[]=GiantVideoTask::where('id',$all->video_id)->first();
           }
       }
       if(request()->sortWl=='old'){
        $watches=collect($boxW)->sortBy('created_at')->values();
       }else{
        $watches=collect($boxW)->sortByDesc(request()->sortWl)->values();
       }
        $sortiraj=request()->sort;
        $sortirajWl=request()->sortWl;
        
        
        
        return view('myBlades.profile', compact('liked','watches','sortiraj','sortirajWl'));
    }
    function logout(){
        Auth::logout();
       return back();
    }
}
