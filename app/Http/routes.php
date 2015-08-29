<?php

/* routing without login */
Route::get('/',['uses'=>'guestController@index','as'=>'home']);
Route::get('/login', ['uses'=>'loginController@index','as'=>'login']);

Route::get('/register/startup', ['uses'=>'loginController@register_startup', 'as'=>'register_startup']);
Route::get('/register/investor', ['uses'=>'loginController@register_investor', 'as'=>'register_investor']);

Route::get('/list_startup', ['uses'=>'guestController@list_startup', 'as'=>'list_startup']);
Route::get('/list_investor', ['uses'=>'guestController@list_investor', 'as'=>'list_investor']);

Route::get('/profile/investor/{nama_investor}',['uses'=>'guestController@profile_investor','as'=>'profile_investor']);
Route::get('/profile/startup/{nama_startup}',['uses'=>'guestController@profile_startup','as'=>'profile_startup']);

Route::post('/create_startup',['uses'=>'loginController@createStartup','as'=>'create_startup']);
Route::post('/create_investor', ['uses'=>'loginController@createInvestor','as'=>'create_investor']);

Route::post('/user/login',['uses'=>'loginController@login','as'=>'user_login']);
Route::get('/user/logout',['uses'=>'loginController@logout','as'=>'user_logout']);

/* routing investor */
Route::get('/investor/{nama_investor}', ['uses'=>'investorController@index','as'=>'home_investor']);
Route::get('/investor/{nama_investor}/edit', ['uses'=>'investorController@edit','as'=>'edit_investor']);
Route::get('investor/{nama_investor}/akun/ganti_password',['uses'=>'investorController@changePassword','as'=>'investor_ganti_password']);

Route::post('investor/{nama_investor}/edit_profil_investor',['uses'=>'investorController@editProfilInvestor','as'=>'edit_profil_investor']);
Route::post('investor/{nama_investor}/edit_detil_investor',['uses'=>'investorController@editDetilInvestor','as'=>'edit_detil_investor']);
Route::post('investor/update_password',['uses'=>'investorController@updatePassword','as'=>'investor_update_password']);

/* routing startup */
Route::get('/startup/{nama_startup}', ['uses'=>'startupController@index','as'=>'home_startup']);
Route::get('/startup/{nama_startup}/edit', ['uses'=>'startupController@edit','as'=>'edit_startup']);
Route::get('/startup/{nama_startup}/{nama_project}/edit', ['uses'=>'startupController@editproject','as'=>'edit_startup_project']);
Route::get('/startup/{nama_startup}/token', ['uses'=>'tokenController@index','as'=>'token']);
Route::get('/startup/{nama_startup}/akun/ganti_password',['uses'=>'startupController@editPassword','as'=>'startup_edit_password']);
Route::get('/startup/{nama_startup}/project/buat_project',['uses'=>'startupController@tambahProject','as'=>'startup_add_project']);
Route::get('/startup/{nama_startup}/project/hapus_project',['uses'=>'startupController@hapusProject','as'=>'startup_hapus_project']);
Route::get('/project/delete_project',['uses'=>'startupController@deleteProject','as'=>'startup_delete_project']);

Route::post('/startup/{nama_startup}/edit_profil_startup',['uses'=>'startupController@editProfilStartup','as'=>'edit_profil_startup']);
Route::post('/startup/{nama_startup}/edit_detil_startup',['uses'=>'startupController@editDetilStartup','as'=>'edit_detil_startup']);
Route::post('/startup/update_password',['uses'=>'startupController@updatePassword','as'=>'startup_update_password']);
Route::post('startup/update_project', ['uses'=>'startupController@updateProject', 'as'=>'startup_update_project']);
Route::post('startup/tambah_project', ['uses'=>'startupController@newProject', 'as'=>'startup_new_project']);

/* routing email */
Route::get('/{nama_perusahaan}/email/inbox',['uses'=>'emailController@getInbox','as'=>'get_inbox']);
Route::get('/{nama_perusahaan}/email/outbox',['uses'=>'emailController@getOutbox','as'=>'get_outbox']);
Route::get('/{nama_perusahaan}/email/trashbox',['uses'=>'emailController@getTrashbox','as'=>'get_trashbox']);
Route::get('/{nama_perusahaan}/email/read',['uses'=>'emailController@readEmail','as'=>'read_email']);
Route::get('/email/soft-delete-email',['uses'=>'emailController@softDelete','as'=>'soft_delete_email']);
Route::get('/email/hard-delete-email',['uses'=>'emailController@hardDelete','as'=>'hard_delete_email']);
Route::get('/email/restore-email',['uses'=>'emailController@restoreEmail','as'=>'restore_email']);
Route::post('email/compose',['uses'=>'emailController@composeEmail','as'=>'compose_email']);

/* Service Endpoint */
Route::get('/API/user/available',['uses'=>'loginController@checkUser','as'=>'check_user']);
Route::post('/komentar/add',['uses'=>'guestController@addKomentar','as'=>'add_komentar']);

/* Search Startup / Investor */