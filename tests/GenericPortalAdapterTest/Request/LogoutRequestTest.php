<?php

use VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest;

class LogoutRequestTest extends \PHPUnit_Framework_TestCase { 

	protected $request;

	public function setUp() 
	{
		parent::setUp();

		$this->request = new LogoutRequest;

		$this->request->setSystemUid(1);
		$this->request->setClientUid(2);

	}


	/**
	 * Ensure that LogoutRequest has all mandatory attributes
	*/
	public function testLogoutRequestHasAttributes() 
	{
		
		$this->assertClassHasAttribute('systemUID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest');
		$this->assertClassHasAttribute('clientUID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest');
	}


	public function testLogoutRequestSetters() 
	{
		$this->assertInstanceOf('VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest', 
			$this->request->setSystemUid(1) 
		);

		$this->assertInstanceOf('VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest', 
			$this->request->setSystemUid(2) 
		);
	}

	public function testLogoutRequestGetters() 
	{
		$this->assertEquals($this->request->systemUID, 1);
		$this->assertEquals($this->request->clientUID, 2);
	}


	public function testLogoutRequestAttributeTypes() 
	{	
		$this->assertTrue( is_numeric($this->request->systemUID) );
		$this->assertTrue( is_numeric($this->request->clientUID) );
	} 


	protected function tearDown() 
	{
        unset($this->request);
    }

}