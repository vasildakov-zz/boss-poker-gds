<?php 

use VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest;

class PlayerPokerGamingActivityRequestTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
	}


	public function testRequestClassProperties() 
	{
		$class = new PlayerPokerGamingActivityRequest;

		$this->assertTrue(property_exists($class, 'username'));
		$this->assertTrue(property_exists($class, 'password'));
		$this->assertTrue(property_exists($class, 'systemId'));
		$this->assertTrue(property_exists($class, 'productGroupId'));
		$this->assertTrue(property_exists($class, 'date'));
	}


	public function tearDown() 
	{

	}

}