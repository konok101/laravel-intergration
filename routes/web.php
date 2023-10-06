<?php

use Illuminate\Support\Facades\Route;

 
 
Route::get('/', function () {
    return view('home');
});

Route::get('myblog', function () {
    return view('myBlog');
});

Route::get('/about', 'App\Http\Controllers\SiteController@about');
Route::get('/contact', 'App\Http\Controllers\SiteController@contact');

Route::get('/name/{fastName}/{lastName}', 'App\Http\Controllers\routhingParameter@myName');

