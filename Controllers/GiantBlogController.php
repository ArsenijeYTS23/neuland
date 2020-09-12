<?php

namespace App\Http\Controllers;
use App\GiantBlog;
use Illuminate\Http\Request;

class GiantBlogController extends Controller
{
    function blog(GiantBlog $giantBlog){
     
//     $str='';
//     return   strlen($str);
      //  $giantBlog->giantBlogPhoto='';
        return view('myBlades.giantBlog',  compact('giantBlog'));
    }
   
}
