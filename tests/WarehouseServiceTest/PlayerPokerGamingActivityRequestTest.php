<?php 

use VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest;

class PlayerPokerGamingActivityRequestTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
	}


	public function testPlayerPokerGamingActivityRequestHasProperties() 
	{
		$class = new PlayerPokerGamingActivityRequest;

		$this->assertTrue(property_exists($class, 'username'));
		$this->assertClassHasAttribute('username', 'VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest');

		$this->assertTrue(property_exists($class, 'password'));
		$this->assertClassHasAttribute('password', 'VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest');

		$this->assertTrue(property_exists($class, 'systemId'));
		$this->assertClassHasAttribute('systemId', 'VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest');

		$this->assertTrue(property_exists($class, 'productGroupId'));
		$this->assertClassHasAttribute('productGroupId', 'VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest');

		$this->assertTrue(property_exists($class, 'date'));
		$this->assertClassHasAttribute('date', 'VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest');
	}


	public function tearDown() 
	{

	}

}