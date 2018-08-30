<?php

namespace model;

class User{
	public function register($dados){

	
	$db = new \model\Database();
	$db->insertUser($dados);
	}
}