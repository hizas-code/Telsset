<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function () {
    return redirect('index');
});

route::get('index', function (){
   return view('index');
});

route::get('complain', function(){
    return view('complain');
});