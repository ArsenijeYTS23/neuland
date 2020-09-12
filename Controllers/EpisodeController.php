<?php

namespace App\Http\Controllers;
use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
   function episode(Episode $episode){
       $episode->increment('totalViews');
       
         if($episode->serie->episode()->where('number','>',$episode->number)->first()){
         $episode->next=$episode
                 ->serie
                 ->episode()
                 ->where('number','>',$episode->number)
                 ->first()
                 ->id;
         }
         if($episode->serie->episode()->where('number','<',$episode->number)->first()){
         $episode->previous=$episode
                 ->serie
                 ->episode()
                 ->where('number','<',$episode->number)
                 ->latest()
                 ->first()
                 ->id;
         }
        return view('myBlades.programs-episode', compact('episode'));
   }
}
