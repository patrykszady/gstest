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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('clients', 'ClientsController');

Route::get('projects/create/{id}', 'ProjectsController@create');
Route::resource('projects', 'ProjectsController');

Route::post('hours/storepayment', 'HoursController@storepayment');
Route::get('hours/{id}/createpayment', 'HoursController@createpayment');

Route::resource('hours', 'HoursController');

Route::resource('expenses', 'ExpensesController');

Route::resource('payments', 'PaymentsController');

Route::resource('subs' , 'SubsController');




