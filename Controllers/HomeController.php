<?php

namespace App\Http\Controllers;
use App\Episode;
use App\Giant;
use App\GiantVideoTask;
use App\GiantBlog;
use Illuminate\Support\Facades\Auth;
use App\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  function index(){
     $hotest=HomeController::sortiraj('totalLikes');
  //  $newest=HomeController::sortiraj('created_at');
    $preferences=['episode','giantBlog'];
    $preferences='';
    $boxes=[Episode::latest()->first(),
        GiantBlog::latest()->first(),
        GiantVideoTask::latest()->first()];
   
    if($preferences){
    foreach($boxes as $box){
        $new[]=$box;
    }
  
    $newest=[];
    foreach($preferences as $preference){
      $newest[]=collect($new)
              ->where('type',$preference)
              ->values();  
    }
    foreach($newest as $n){
        $swipers[]=$n[0];
    }
    }else{
        $swipers=$boxes;
    }
   //return  $swipers[2]->giant->program->logo;

      return view('myBlades.home', compact('hotest','swipers'));
  }
   static function sortiraj($subj){
               $giants=Giant::all();
            
               if($giants){
                foreach ($giants as $giant){
          foreach($giant->giantBlog as $blog){
              $g[]=$blog;
          }
          foreach($giant->giantVideoTask as $task){
              $gi[]=$task;
          }
      }
               }
     
      $najn=[];
                  if($giants){
                 $g= collect($g)
                         ->sortByDesc($subj)
                         ->values()
                         ->take(2);
                 array_push($najn,$g);
                  }
                  if($giants){
                  $gi= collect($gi)
                          ->sortByDesc($subj)
                          ->values()
                          ->take(2);
                  array_push($najn,$gi);
                  }
                
                   $epi=Episode::all();
         
                    if($epi){
                 $epi= collect($epi)
                         ->sortByDesc($subj)
                         ->values()
                         ->take(3);
                array_push($najn,$epi);
                    }
                   
                 if($najn){
                 foreach($najn as $naj){
                     foreach($naj as $n){
                         $e[]=$n;
                     }
                 }
             
              if($e){
               return  $najnovije=collect($e)
                       ->sortByDesc($subj)
                       ->values()
                       ->take(6);
                 }
                 }
                }
}
