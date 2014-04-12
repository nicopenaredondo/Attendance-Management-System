<?php

class InstallController extends Controller
{

	public function getInstall(){
		return View::make('installer.index');
	}

	public function postInstall(){
		var_dump('POST - Install');
	}

}