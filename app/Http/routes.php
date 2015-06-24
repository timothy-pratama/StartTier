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

Route::get('/', ['as' => 'home', function () {
    return view('index');
}]);

/* routing tanpa login */
Route::get('/login', ['uses'=>'loginController@index','as'=>'login']);
Route::get('/register_startup', ['uses'=>'loginController@register_startup', 'as'=>'register_startup']);
Route::get('/register_investor', ['uses'=>'loginController@register_investor', 'as'=>'register_investor']);
Route::get('/list_startup', ['uses'=>'startupController@index', 'as'=>'list_startup']);
Route::get('/list_investor', ['uses'=>'investorController@index', 'as'=>'list_investor']);