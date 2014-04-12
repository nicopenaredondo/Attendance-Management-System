<?php
Route::group(array('after' => 'install'),function(){

	Route::get('install',array(
		'as' 		=> 'install',
		'uses'	=> 'InstallController@getInstall'
	));

	Route::post('install',array(
		'as' 		=> 'install.process',
		'uses'	=> 'InstallController@postInstall'
	));

});