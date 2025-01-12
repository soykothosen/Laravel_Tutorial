<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('custom');
});


Route::view('/new','welcome');

Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});

// Route::get('/about', function () {
//     return view('about');
// });

#Route::redirect('/laravel','/new');

#Route::get('user',[UserController::class,'getUser']);

Route::get('user/{name}',[UserController::class,'getUser']);

Route::post('formsubmit',[UserController::class,'formdata']);

Route::get('/getform', function () {
    return view('form');
});



