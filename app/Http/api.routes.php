<?php

Route::group(['prefix' => 'api','middleware' => ['check-token']], function(){

    Route::get('users', "ApiController@index");
    Route::get('users/{user}', "ApiController@show");
    Route::get('me', "ApiController@me");

});