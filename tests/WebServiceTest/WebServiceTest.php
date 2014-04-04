<?php 

use VasilDakov\GDS\WebService;
#use VasilDakov\GDS\WebService\Request;
#use VasilDakov\GDS\WebService\Response;

class WebServiceTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
		$this->client = new WebService();
	}


	/**
	 * Ensure that all methods are implemented 
	 */
	public function testWebServiceHasMethods() 
	{
		// 8.1
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_CheckMttTableEnd'), 
    		'Class does not have method Poker_CheckMttTableEnd'
		);

    	// 8.2
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_GetData'), 
    		'Class does not have method Poker_GetData'
		);

    	// 8.3
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_GetFirstRound'), 
    		'Class does not have method Poker_GetFirstRound'
		);

		// 8.4
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_GetLastTableId'), 
    		'Class does not have method Poker_GetLastTableId'
		);

		// 8.5
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_GetMttRoundId'), 
    		'Class does not have method Poker_GetMttRoundId'
		);

		// 8.6
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_GetMttTableId'), 
    		'Class does not have method Poker_GetMttTableId'
		);

		// 8.7
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_GetNextRound'), 
    		'Class does not have method Poker_GetNextRound'
		);

		// 8.8
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_GetTableId'), 
    		'Class does not have method Poker_GetTableId'
		);

		// 8.9
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_GetTournamentId'), 
    		'Class does not have method Poker_GetTournamentId'
		);

		// 8.10
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_UserPlayInfo'), 
    		'Class does not have method Poker_UserPlayInfo'
		);

		// 8.11
    	$this->assertTrue(
    		method_exists($this->client, 'Poker_UserPlayNBlindsInfo'), 
    		'Class does not have method Poker_UserPlayNBlindsInfo'
		);
	}

}