<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('users', 'UserController@index')->name('userList');
    Route::get('users/create', 'UserController@create')->name('createUser');
    Route::get('users/{user}/edit', 'UserController@edit')->name('editUser');
    Route::post('users/{id}/update', 'UserController@update')->name('updateUser');
    Route::delete('users/{id}', 'UserController@delete')->name('deleteUser');
    Route::post('users', 'UserController@store');

});
