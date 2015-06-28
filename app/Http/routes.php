<?php

/* routing tanpa login (guest) */
Route::get('/',['uses'=>'guestController@index','as'=>'home']);
Route::get('/login', ['uses'=>'loginController@index','as'=>'login']);

Route::get('/register/startup', ['uses'=>'loginController@register_startup', 'as'=>'register_startup']);
Route::get('/register/investor', ['uses'=>'loginController@register_investor', 'as'=>'register_investor']);

Route::get('/list_startup', ['uses'=>'guestController@list_startup', 'as'=>'list_startup']);
Route::get('/list_investor', ['uses'=>'guestController@list_investor', 'as'=>'list_investor']);

Route::get('/profile/investor/{nama_investor}',['uses'=>'guestController@profile_investor','as'=>'profile_investor']);
Route::get('/profile/startup/{nama_startup}',['uses'=>'guestController@profile_startup','as'=>'profile_startup']);

/* routing investor */
Route::get('/investor/{nama_investor}', ['uses'=>'investorController@index','as'=>'home_investor']);
Route::get('/investor/{nama_investor}/edit', ['uses'=>'investorController@edit','as'=>'edit_investor']);

/* routing startup */
Route::get('/startup/{nama_startup}', ['uses'=>'startupController@index','as'=>'home_startup']);
Route::get('/startup/{nama_startup}/edit', ['uses'=>'startupController@edit','as'=>'edit_startup']);
Route::get('/startup/{nama_startup}/{nama_project}/edit', ['uses'=>'startupController@editproject','as'=>'edit_startup_project']);
Route::get('/startup/{nama_startup}/token', ['uses'=>'tokenController@index','as'=>'token']);

/* routing email */
Route::get('/email/{username}', ['uses'=>'emailController@index','as'=>'email']);