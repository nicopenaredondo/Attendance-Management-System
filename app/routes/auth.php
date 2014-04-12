<?php

Route::group(array('prefix' => 'auth'),function(){

	Route::get('/',function(){
		return Redirect::route('auth.login');
	});

	Route::get('login.html',array(
		'as' 		=> 'auth.login',
		'uses'	=> 'AuthController@getLogin'
	));

	Route::post('login.html',array(
		'as' 		=> 'auth.login.process',
		'uses'	=> 'AuthController@postLogin'
	));

	Route::get('forgot-password.html',array(
		'as' 		=> 'auth.forgot-password',
		'uses'	=> 'AuthController@getForgotPassword'
	));

	Route::post('forgot-password.html',array(
		'as' 		=> 'auth.forgot-password.process',
		'uses'	=> 'AuthController@postForgotPassword'
	));

	Route::get('forgot-password/t/{token}.html',array(
		'as' 		=> 'auth.change-forgot-password',
		'uses'	=> 'AuthController@getChangeForgotPassword'
	));

	Route::post('forgot-password/t/{token}.html',array(
		'as' 		=> 'auth.change-forgot-password.process',
		'uses'	=> 'AuthController@postChangeForgotPassword'
	));

});