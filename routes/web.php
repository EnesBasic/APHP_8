<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/test', function(){
    return view('test', [
        'names'=>['Bruce','Peter','Klark']
    ]);
});



Route::get('/test1', function () {
    return view('test1');
});



Route::get('/test2', function () {
    return view('test2');
});


Route::get('/test3', function () {
    return view('test3', [
        "title" => "Hello iz test3",
        "content_h1"=> "helo form test3!",
        "content_h2"=> "wilkommen nostra site, ha ha ha..."
    ]);
});