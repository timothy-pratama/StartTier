<?php

/* routing tanpa login */
Route::get('/',['uses'=>'guestController@index','as'=>'home']);
Route::get('/login', ['uses'=>'loginController@index','as'=>'login']);

Route::get('/register/startup', ['uses'=>'loginController@register_startup', 'as'=>'register_startup']);
Route::get('/register/investor', ['uses'=>'loginController@register_investor', 'as'=>'register_investor']);

Route::get('/list_startup', ['uses'=>'startupController@list_startup', 'as'=>'list_startup']);
Route::get('/list_investor', ['uses'=>'investorController@list_investor', 'as'=>'list_investor']);

Route::get('/profile/investor/{nama_investor}',['uses'=>'investorController@profile_investor','as'=>'profile_investor']);
Route::get('/profile/startup/{nama_startup}',['uses'=>'startupController@profile_startup','as'=>'profile_startup']);

/* routing perusahaan investor */
Route::get('/investor/{nama_investor}', ['uses'=>'investorController@index','as'=>'home_investor']);
Route::get('/startup/{nama_startup}', ['uses'=>'startupController@index','as'=>'home_startup']);