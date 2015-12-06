<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
	return view('login');
});

Route::get('index', function (){
	return view('index');
});

Route::get('logout', function (){
	Session::forget('user');
	return redirect('index');
});

Route::get('chatroom', function (){
	return view('Chat.index');
});

Route::get('classroom', function (){
	return view('classroom.live');
});

Route::get('users', 'UserController@index');

Route::get('users/create', 'UserController@create');

Route::get('users/{Id}', 'UserController@getUser');

Route::post('users','UserController@save');

Route::post('authenticate','UserController@authenticate');
