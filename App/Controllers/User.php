<?php

namespace controller;

class User{
	public function register(){
		require("view/register.php");
		
	}
	public function registerUser (){
		$name = $_POST['name'];
		$password = MD5($_POST['password']);
		$email = $_POST['email'];
		$birthDate = $_POST['birthDate'];
		$sex = $_POST['sex'];
		$dados = [
			'name'  => $name,
			'password' => $password,
			'email'  => $email,
			'birthDate'  => $birthDate,
			'sex'  => $sex
		];
		$register = new \model\User();
		$register->register($dados);
	}
}