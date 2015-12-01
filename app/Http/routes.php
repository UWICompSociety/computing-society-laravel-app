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

// api
Route::group(['prefix' => 'api'], function()
{
    Route::get('users', 'AuthCtrl@index');
    Route::get('auth', 'AuthCtrl@auth');
    Route::post('auth', 'AuthCtrl@login');
    Route::post('auth/register', 'AuthCtrl@register');
    Route::get('auth/logout', 'AuthCtrl@logout');

    Route::resource('users', 'UserCtrl', ['except' => ['create', 'edit']]);
    Route::resource('events', 'EventCtrl', ['except' => ['create', 'edit']]);
    Route::resource('posts', 'PostCtrl', ['except' => ['create', 'edit']]);
    
    Route::resource('posts.comments', 'PostCommentCtrl', ['except' => ['create', 'edit']]);
});

// app (angular templates)
// Route::group(['prefix' => 'app'], function()
// {
//     Route::get('{path?}', function(\Request $req)
//     {
//         return File::get(public_path() . $req->path());
//     });
// });