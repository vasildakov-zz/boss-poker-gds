<?php

use VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest;

class LogoutRequestTest extends \PHPUnit_Framework_TestCase { 

	protected $request;

	public function setUp() 
	{
		parent::setUp();

		$this->request = new LogoutRequest;

		$this->request->systemUID = 1;
		$this->request->sessionID = "sessionstring";

	}


	/**
	 * Ensure that LogoutRequest has all mandatory attributes
	*/
	public function testLogoutRequestHasAttributes() 
	{
		
		$this->assertClassHasAttribute('systemUID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest');
		$this->assertClassHasAttribute('sessionID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest');
	}


	public function testLogoutRequestAttributeTypes() 
	{	
		$this->assertTrue( is_numeric($this->request->systemUID));
		$this->assertTrue( is_string($this->request->sessionID));
	} 


	protected function tearDown() 
	{
        unset($this->request);
    }

}