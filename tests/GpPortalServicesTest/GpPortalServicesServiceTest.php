<?php 

use VasilDakov\GDS\GpPortalServicesService;


class GpPortalServicesServiceTest extends \PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
        
		$wsdl = './data/GpPortalServices.wsdl';

		// a stub based on a web service description in the WSDL
		$this->client = $this->getMockFromWsdl($wsdl, 'GpPortalServicesService');

	}


	/**
	 * Ensure that all methods are implemented 
	 */
	public function testGpPortalServicesServiceHasMethods() 
	{
		$client = new GpPortalServicesService('./data/GpPortalServices.wsdl');

    	$this->assertTrue(
    		method_exists($client, 'GetAvailableGames'), 
    		'Class does not have method GetAvailableGames'
		);

    	$this->assertTrue(
    		method_exists($client, 'GetAvailableMiniGames'), 
    		'Class does not have method GetAvailableMiniGames'
		);

    	$this->assertTrue(
    		method_exists($client, 'GetJackpotValue'), 
    		'Class does not have method GetJackpotValue'
		);

    	$this->assertTrue(
    		method_exists($client, 'GetMultiplePlayerHistoryEventDetails'), 
    		'Class does not have method GetMultiplePlayerHistoryEventDetails'
		);

    	$this->assertTrue(
    		method_exists($client, 'GetPlayerHistoryEventDetails'), 
    		'Class does not have method GetPlayerHistoryEventDetails'
		);

    	$this->assertTrue(
    		method_exists($client, 'GetPlayerHistoryEvents'), 
    		'Class does not have method GetPlayerHistoryEvents'
		);

    	$this->assertTrue(
    		method_exists($client, 'GetTickerMessages'), 
    		'Class does not have method GetTickerMessages'
		);

    	$this->assertTrue(
    		method_exists($client, 'GetUnfinishedGames'), 
    		'Class does not have method GetUnfinishedGames'
		);
		
	}


	public function testGetAvailableGames() {}

	public function testGetAvailableGamesResponse() {}

	public function testGetAvailableMiniGames() {}

	public function testGetAvailableMiniGamesResponse() {}

	public function testGetJackpotValue() {}

	public function testGetJackpotValueResponse() {}

	public function testGetMultiplePlayerHistoryEventDetails() {}

	public function testGetMultiplePlayerHistoryEventDetailsResponse() {}

	public function testGetPlayerHistoryEventDetails() {}

	public function testGetPlayerHistoryEventDetailsResponse() {}

	public function testGetPlayerHistoryEvents() {}

	public function testGetPlayerHistoryEventsResponse() {}

	public function testGetTickerMessages() {}

	public function testGetTickerMessagesResponse() {}

	public function testGetUnfinishedGames() {}

	public function testGetUnfinishedGamesResponse() {}

}