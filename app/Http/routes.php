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

// test
Route::get('/', function () {
    return view('welcome');
});

// app (angular templates)

// api
Route::group(['prefix' => 'api'], function()
{

});

// admin
Route::group(['prefix' => 'admin'], function() {

});

Route::group(['prefix' => 'acm'], function() {

});

Route::group(['prefix' => 'ieee'], function() {

});

Route::group(['prefix' => 'wave'], function() {

});

Route::group(['prefix' => 'hackers'], function() {

});