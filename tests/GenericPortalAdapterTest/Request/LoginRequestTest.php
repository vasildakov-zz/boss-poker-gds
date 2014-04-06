<?php

use VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest;

class LoginRequestTest extends \PHPUnit_Framework_TestCase { 

	protected $request;

	public function setUp() 
	{
		parent::setUp();

		$this->request = new LoginRequest;

		$this->request->systemUID = '1';
		$this->request->clientUID = '2';
		$this->request->clientIpAddress = '10.1.1.1';
		$this->request->username = 'username';
		$this->request->password = 'password';
	}


	/**
	 * Ensure that LoginRequest has all mandatory attributes
	*/
	public function testLoginRequestHasAttributes() 
	{
		$this->assertClassHasAttribute('systemUID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
		$this->assertClassHasAttribute('clientUID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
		$this->assertClassHasAttribute('clientIpAddress', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
		$this->assertClassHasAttribute('username', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
		$this->assertClassHasAttribute('password', 'VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest');
	}

	public function test1() 
	{
		$this->assertInstanceOf('VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest', $this->request);
	}

	protected function tearDown() 
	{
        unset($this->request);
    }

}