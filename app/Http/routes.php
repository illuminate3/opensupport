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

Route::get('/', 'DashboardController@index');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/system', 'AdminController@system');

Route::resource('tickets', 'TicketController');
Route::post('/tickets/comment', 'TicketController@addComment');

Route::resource('/admin/users', 'UserController');
Route::resource('clients', 'ClientController');

Route::get('/user/profile', 'UserController@profile');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
