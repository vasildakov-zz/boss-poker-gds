<?php 

use VasilDakov\GDS\WarehouseService;
use VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest;
use VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityResponse;

class WarehouseServiceTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
        
		$wsdl = './data/WarehouseServices.wsdl';
		// $this->client = new WarehouseService($wsdl, $options = array());

		// a stub based on a web service description in the WSDL
		$this->mockClient = $this->getMockFromWsdl($wsdl, 'WarehouseService');
		$this->client = new WarehouseService('./data/WarehouseServices.wsdl', $options = array());

	}


	public function testWarehouse_PlayerPokerGamingActivity1() 
	{
        // the request
        $request  = new PlayerPokerGamingActivityRequest;
        $request->username = 'gds_awh';
        $request->password = '6u5EwraF';
        $request->systemId = '48';
        $request->productGroupId = array('6670');
        $request->date = '2014-03-01';

        // the response
        $response = new PlayerPokerGamingActivityResponse;
        $response->PlayerPokerGamingActivityResult = TRUE;

		$this->mockClient->expects($this->any())
                     ->method('Warehouse_PlayerPokerGamingActivity')
                     ->will($this->returnValue($response));

        $this->assertEquals($response, $this->mockClient->Warehouse_PlayerPokerGamingActivity($request) );

        $this->assertTrue($response->PlayerPokerGamingActivityResult);

	}



    public function testConstruct()
    {
    	$client = new WarehouseService('./data/WarehouseServices.wsdl', $options = array());
        $this->assertInstanceOf('\VasilDakov\GDS\WarehouseService', $client);
    }


    public function testWarehouseServiceInheritance()
    {
    	$client = new WarehouseService('./data/WarehouseServices.wsdl', $options = array());
        $functions = $client->__getFunctions();
        $this->assertInternalType('array', $functions);
        $this->assertCount(11, $functions); // 11 available in the wsdl, actualy they are 40
    }



    public function testWarehouseServiceHasAllMethods() 
    {

    	$this->assertTrue(
    		method_exists($this->client, 'getPlayerPokerGamingActivity'), 
    		'Class does not have method getPlayerPokerGamingActivity'
		);

    	$this->assertTrue(
		  	method_exists($this->client, 'getPlayerRealMoneyTransaction'), 
		  	'Class does not have method getPlayerRealMoneyTransaction'
		);

    	$this->assertTrue(
		  	method_exists($this->client, 'getPlayerBonusMoneyTransaction'), 
		  	'Class does not have method getPlayerBonusMoneyTransaction'
		);

    	$this->assertTrue(
		  	method_exists($this->client, 'getDimensionPlayer'), 
		  	'Class does not have method getDimensionPlayer'
		);

    	$this->assertTrue(
		  	method_exists($this->client, 'getDimensionPlayerAffiliate'), 
		  	'Class does not have method getDimensionPlayerAffiliate'
		);

    	$this->assertTrue(
		  	method_exists($this->client, 'getDimensionGame'), 
		  	'Class does not have method getDimensionGame'
		);

    	$this->assertTrue(
		  	method_exists($this->client, 'getDimensionProduct'), 
		  	'Class does not have method getDimensionProduct'
		);		

    	$this->assertTrue(
		  	method_exists($this->client, 'getGroupGameSession'), 
		  	'Class does not have method getGroupGameSession'
		);			

    	$this->assertTrue(
		  	method_exists($this->client, 'getReferCampaignReport'), 
		  	'Class does not have method getReferCampaignReport'
		);				

    	$this->assertTrue(
		  	method_exists($this->client, 'getTodaysAggScriptRuns'), 
		  	'Class does not have method getTodaysAggScriptRuns'
		);			

    	$this->assertTrue(
		  	method_exists($this->client, 'getCustomerAccountStates'), 
		  	'Class does not have method getCustomerAccountStates'
		);	

    	$this->assertTrue(
		  	method_exists($this->client, 'getAggPokerDaily'), 
		  	'Class does not have method getAggPokerDaily'
		);	

    	$this->assertTrue(
		  	method_exists($this->client, 'getAggCustProdDaily'), 
		  	'Class does not have method getAggCustProdDaily'
		);			

    	$this->assertTrue(
		  	method_exists($this->client, 'getAggTableDaily'), 
		  	'Class does not have method getAggTableDaily'
		);		

    	$this->assertTrue(
		  	method_exists($this->client, 'getAggSttDaily'), 
		  	'Class does not have method getAggSttDaily'
		);				

    	$this->assertTrue(
		  	method_exists($this->client, 'getAggMttDaily'), 
		  	'Class does not have method getAggMttDaily'
		);	

    	$this->assertTrue(
		  	method_exists($this->client, 'getAggProdDailyPlayerNumbers'), 
		  	'Class does not have method getAggProdDailyPlayerNumbers'
		);		
		
    	$this->assertTrue(
		  	method_exists($this->client, 'getAggProdGroupDailyRegistrations'), 
		  	'Class does not have method getAggProdGroupDailyRegistrations'
		);		
		
    	$this->assertTrue(
		  	method_exists($this->client, 'getAggLog'), 
		  	'Class does not have method getAggLog'
		);			

    	$this->assertTrue(
		  	method_exists($this->client, 'getDailyBalanceOut'), 
		  	'Class does not have method getDailyBalanceOut'
		);	

    	$this->assertTrue(
		  	method_exists($this->client, 'getSessionStakes'), 
		  	'Class does not have method getSessionStakes'
		);		

		
    }



	public function testWarehouse_PlayerPokerGamingActivity() 
	{
		
		$request = new PlayerPokerGamingActivityRequest;
		$request->username = 'gds_awh'; 
		$request->password = '6u5EwraF';
		$request->systemId = '48';
		$request->productGroupId = array('6670'); 
		$request->date = '2014-03-01';
		
		$response = new PlayerPokerGamingActivityResponse;

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