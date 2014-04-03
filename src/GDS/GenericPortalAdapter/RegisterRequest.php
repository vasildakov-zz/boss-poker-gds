<?php

namespace VasilDakov\GDS\GenericPortalAdapter;

class RegisterRequest {

	public $systemUID;

	public $clientUID;

	public $partnerUID;

	public $ipAddress;

	public $promotionCode;

	public $visitorID;

	public $registrationLevel;

	public $properties = array();


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