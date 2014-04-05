<?php

use VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest;

class LoginRequestTest extends \PHPUnit_Framework_TestCase { 

	public function setUp() 
	{
		parent::setUp();
	}


	/**
	 * Ensure that LoginRequest has all mandatory attributes
	*/
	public function testLoginRequestHasAttributes() 
	{
		$request = new LoginRequest;

		$this->assertClassHasAttribute('systemUID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
		$this->assertClassHasAttribute('clientUID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
		$this->assertClassHasAttribute('clientIpAddress', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
		$this->assertClassHasAttribute('username', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
		$this->assertClassHasAttribute('password', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
	}
	
}