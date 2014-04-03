<?php


namespace VasilDakov\GDS\GenericPortalAdapter;

class LoginRequest {

	public $username;

	public $password;
	
	public function __construct() 
	{
	}

	public function __get($key) 
	{
		if (property_exists($this, $key)) {
			return $this->$key;
		}
	}


	public function __set($key, $value) 
	{
		if (property_exists($this, $key)) {
			$this->$key = $value;
		}

		return $this;
	}
}