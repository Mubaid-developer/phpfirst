<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/about',function(){
    return view('about');
});

route ::get('/abc',function(){
    return view ('abc');
});

Route:: get('/bilal', function(){
    return view('bilal');
});


route::get ('/pakistan/karachi',function (){
    return view('pakistan.karachi');
});



















