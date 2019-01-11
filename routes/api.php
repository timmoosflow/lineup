<?php

use Illuminate\Http\Request;

/*
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/

Route::group([

    'prefix' => 'auth'

 ], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

// gigs routing
Route::get ('gigs', 'GigController@index');
Route::get ('gigs/{id}', 'GigController@show');
Route::post ('gig', 'GigController@store');
Route::put ('gig', 'GigController@store');
Route::delete ('gig/{id}', 'GigController@destroy');

// comment routing
Route::get ('comments/{id}', 'CommentController@show');
Route::post ('comment', 'CommentController@store');
Route::delete ('comment/{id}', 'CommentController@destroy');
