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

Route::get('/settings', 'SettingsController@index');
Route::get('/settings/system', 'SettingsController@index');
Route::get('/settings/users', 'SettingsController@index');

Route::resource('tickets', 'TicketController');

Route::resource('clients', 'ClientController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
