<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SystemController@index');
Route::get('login', 'SystemController@login');
Route::post('login', 'UsersController@login');
Route::get('administrator', 'SystemController@admin');
Route::get('administrator/route', 'SystemController@vesselRoute');
Route::get('administrator/schedule', 'SystemController@vesselSchedule');