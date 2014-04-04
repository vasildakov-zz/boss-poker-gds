<?php 

use VasilDakov\GDS\GpPortalServicesService;


class GpPortalServicesServiceTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
        
		$wsdl = './data/GpPortalServices.wsdl';

		// a stub based on a web service description in the WSDL
		$this->client = $this->getMockFromWsdl($wsdl, 'GpPortalServicesService');

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