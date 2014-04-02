<?php 

use VasilDakov\GDS\WarehouseService;
use VasilDakov\GDS\WarehouseService\Warehouse_PlayerPokerGamingActivity;
use VasilDakov\GDS\WarehouseService\Warehouse_PlayerPokerGamingActivityResponse;

class WarehouseServiceTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		// $this->client = new WarehouseService('./data/GenericPortalAdapter.wsdl');
		// $this->client = $this->getMockFromWsdl('./data/GenericPortalAdapter.wsdl');
	}


	public function testWarehouse_PlayerPokerGamingActivity() 
	{
		/*
		$parameters = new Warehouse_PlayerPokerGamingActivity();
		$parameters->username = 'gds_awh'; 
		$parameters->password = '6u5EwraF';
		$parameters->systemId = '48';
		$parameters->productGroupId = array('6670'); 
		$parameters->date = '2014-03-01';

		$response = new Warehouse_PlayerPokerGamingActivityResponse();
		$response = $this->client->Warehouse_PlayerPokerGamingActivity($parameters);
		$response->Warehouse_PlayerPokerGamingActivityResult;
		*/

	}


	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testThrowsExceptionIfNonNumericIsPassed() 
	{
		
		$wsdl = null;
		$options = null;
		$this->client = new WarehouseService($wsdl, $options);
	}
}