<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     function about(){
        return view('myBlog');
    }
    
    function contact(){
        return view('myContact');
    }
    
}
