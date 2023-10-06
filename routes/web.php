<?php

use Illuminate\Support\Facades\Route;

 
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('myblog', function () {
    return view('myBlog');
});

Route::get('/Mysite', 'App\Http\Controllers\SiteController@Mysite');

