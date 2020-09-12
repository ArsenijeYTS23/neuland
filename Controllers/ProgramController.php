<?php

namespace App\Http\Controllers;
use App\Program;

use App\UserFollowProgram;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index(){
        $programs=Program::all();
       foreach($programs as $program){
          if($program->serie){
          foreach($program->serie->episode as $episode){
              $updated[]=$episode;
          }
          }
          foreach($program->giant as $giant){
             foreach($giant->giantVideoTask as $videoTask){
                  $updated[]=$videoTask;
             }
          }
          if($updated){
          $program->updated= \Carbon\Carbon::parse(collect($updated)->sortByDesc('created_at')->values()->first()->created_at);
          }
          $updated=[];
      }
     
    return view('myBlades.programs', compact('programs'));
    }
    function program(Program $program, $load=1){
            $next=$load+1;
      
        return view('myBlades.program1', compact('program','load','next'));
    }
}
