<?php

namespace VasilDakov\GDS\GenericPortalAdapter\Request;

use VasilDakov\GDS\GenericPortalAdapter\Collection\PlayerPropertyCollection;

class RegisterRequest {

	public $systemUID;

	public $clientUID;

	public $partnerUID;

	public $ipAddress;

	public $promotionCode;

	public $visitorID;

	public $registrationLevel;

	public $properties;


	public function __construct() 
	{
		$this->properties = new PlayerPropertyCollection;
	}
}