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

Route::group(['middleware' => ['web']], function () {

    // Route::get('/', function () {
    //     // return view('welcome');
    //     return "firt try";
    // });

    Route::get('/', 'MController@index');
    Route::get('/lorem', 'LoremController@getLorem');
    Route::post('/lorem','LoremController@postLorem');
    Route::get('/randomuser', 'RandomController@getRandomUser');
    Route::post('/randomuser','RandomController@postRandomUser');

});
