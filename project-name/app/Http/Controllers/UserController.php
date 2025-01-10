<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function getUser($name){
       # return 'The name is'.$name;
       return view('about',['name'=>$name]);
    }
}
