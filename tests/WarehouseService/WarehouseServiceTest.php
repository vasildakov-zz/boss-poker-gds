<?php 

use VasilDakov\GDS\WarehouseService;
use VasilDakov\GDS\WarehouseService\Warehouse_PlayerPokerGamingActivityRequest;
use VasilDakov\GDS\WarehouseService\Warehouse_PlayerPokerGamingActivityResponse;

class WarehouseServiceTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		$wsdl = './data/WarehouseServices.wsdl';
		$this->client = new WarehouseService($wsdl, $options = array());
	}

    public function testConstruct()
    {
        $this->assertInstanceOf('\VasilDakov\GDS\WarehouseService', $this->client);
    }


    public function testInheritance()
    {
        $functions = $this->client->__getFunctions();
        $this->assertInternalType('array', $functions);
        $this->assertCount(11, $functions); // 11 available in the wsdl, actualy they are 40
    }

	public function testWarehouse_PlayerPokerGamingActivity() 
	{
		
		$parameters = new Warehouse_PlayerPokerGamingActivityRequest();
		$parameters->username = 'gds_awh'; 
		$parameters->password = '6u5EwraF';
		$parameters->systemId = '48';
		$parameters->productGroupId = array('6670'); 
		$parameters->date = '2014-03-01';
		
		/* 
		$response = new Warehouse_PlayerPokerGamingActivityResponse();
		$response = $this->client->Warehouse_PlayerPokerGamingActivity($parameters);
		$response->Warehouse_PlayerPokerGamingActivityResult; */
		

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