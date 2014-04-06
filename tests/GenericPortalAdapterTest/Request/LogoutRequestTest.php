<?php

use VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest;

class LogoutRequestTest extends \PHPUnit_Framework_TestCase { 

	protected $request;

	public function setUp() 
	{
		parent::setUp();

		$this->request = new LogoutRequest;

		$this->request->set('systemUID', 1);
		$this->request->set('sessionID', "sessionstring");

	}


	/**
	 * Ensure that LogoutRequest has all mandatory attributes
	*/
	public function testLogoutRequestHasAttributes() 
	{
		
		$this->assertClassHasAttribute('systemUID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest');
		$this->assertClassHasAttribute('sessionID', 'VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest');
	}


	public function testLogoutRequestSetters() 
	{
		$this->assertInstanceOf('VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest', 
			$this->request->set('systemUID', 1)
		);

		$this->assertInstanceOf('VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest', 
			$this->request->set('sessionID', "sessionstring") 
		);
	}

	public function testLogoutRequestGetters() 
	{
		$this->assertEquals($this->request->get('systemUID'), 1);
		$this->assertEquals($this->request->get('sessionID'), "sessionstring");
	}


	public function testLogoutRequestAttributeTypes() 
	{	
		$this->assertTrue( is_numeric($this->request->get('systemUID')));
		$this->assertTrue( is_string($this->request->get('sessionID')));
	} 


	protected function tearDown() 
	{
        unset($this->request);
    }

}