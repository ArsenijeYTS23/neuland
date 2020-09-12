<?php

namespace App\Http\Controllers;
use App\GiantVideoTask;
use Illuminate\Http\Request;

class GiantVideoTaskController extends Controller
{
   function videoTask(GiantVideoTask $giantVideoTask){
     //  return $giantVideoTask;
       return view('myBlades.giantVideoTask', compact('giantVideoTask'));
   }
}
