<?php

class AuthController extends BaseController
{

	public function getLogin(){
		var_dump('GET - Login');
	}

	public function postLogin(){
		var_dump('POST - Login');
	}

	public function getForgotPassword(){
		var_dump('GET - Forgot Password');
	}

	public function postForgotPassword(){
		var_dump('POST - Forgot Password');
	}

	public function getChangeForgotPassword($token){
		var_dump('GET - Change Forgot Password');
	}

	public function postChangeForgotPassword($token){
		var_dump('POST - Change Forgot Password');
	}

}