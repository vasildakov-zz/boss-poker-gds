<?php 

use VasilDakov\GDS\WarehouseService;
use VasilDakov\GDS\WarehouseService\Warehouse_PlayerPokerGamingActivityRequest;
use VasilDakov\GDS\WarehouseService\Warehouse_PlayerPokerGamingActivityResponse;

class WarehouseServiceTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
        
		$wsdl = './data/WarehouseServices.wsdl';
		// $this->client = new WarehouseService($wsdl, $options = array());

		// a stub based on a web service description in the WSDL
		$this->client = $this->getMockFromWsdl($wsdl, 'WarehouseService');

	}


	public function testWarehouse_PlayerPokerGamingActivity1() 
	{
        // the request
        $request  = new Warehouse_PlayerPokerGamingActivityRequest;
        $request->username = 'gds_awh';
        $request->password = '6u5EwraF';
        $request->systemId = '48';
        $request->productGroupId = array('6670');
        $request->date = '2014-03-01';

        // the response
        $response = new Warehouse_PlayerPokerGamingActivityResponse;
        $response->Warehouse_PlayerPokerGamingActivityResult = TRUE;

		$this->client->expects($this->any())
                     ->method('Warehouse_PlayerPokerGamingActivity')
                     ->will($this->returnValue($response));

        $this->assertEquals($response, $this->client->Warehouse_PlayerPokerGamingActivity($request) );

        $this->assertTrue($response->Warehouse_PlayerPokerGamingActivityResult);

	}



    public function testConstruct()
    {
    	$client = new WarehouseService('./data/WarehouseServices.wsdl', $options = array());
        $this->assertInstanceOf('\VasilDakov\GDS\WarehouseService', $client);
    }


    public function testInheritance()
    {
    	$client = new WarehouseService('./data/WarehouseServices.wsdl', $options = array());
        $functions = $client->__getFunctions();
        $this->assertInternalType('array', $functions);
        $this->assertCount(11, $functions); // 11 available in the wsdl, actualy they are 40
    }


	public function testWarehouse_PlayerPokerGamingActivity() 
	{
		
		$request = new Warehouse_PlayerPokerGamingActivityRequest;
		$request->username = 'gds_awh'; 
		$request->password = '6u5EwraF';
		$request->systemId = '48';
		$request->productGroupId = array('6670'); 
		$request->date = '2014-03-01';
		
		$response = new Warehouse_PlayerPokerGamingActivityResponse;

		/* 
		
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