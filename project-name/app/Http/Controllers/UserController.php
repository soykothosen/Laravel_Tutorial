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

    function formdata( Request $request){
        #return 'Form Data';
        #return $request;
        echo 'Name '. $request->name;
        echo '<br>';
         echo 'Password '. $request->password;
        echo '<br>';
        
        
     }
}
