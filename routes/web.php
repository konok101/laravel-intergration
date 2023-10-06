<?php

use Illuminate\Support\Facades\Route;


route::group(['prefix' => 'account'], function () {

    //route call account/nameee

    route::get('/', function () {
        return "homeeeeee";
    });

    route::get('/profile', function () {
        return "profile";
    });

      route::get('/logout', function () {
        return "logout";
    });




});
