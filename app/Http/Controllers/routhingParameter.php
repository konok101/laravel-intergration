<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routhingParameter extends Controller
{
    function myName($fastName, $lastName){

        return view('myName', ['firstkey'=>$fastName, 'lastkey'=>$lastName]);

    }
}
