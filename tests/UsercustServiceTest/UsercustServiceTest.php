<?php 

use VasilDakov\GDS\UsercustService;

class UsercustServiceTest extends \PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
		$this->client = new UsercustService();
	}

	/**
	 * Ensure that all methods are implemented 
	 */
	public function testUsercustServiceHasMethods() 
	{
		// 9.1
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_AuthenticateCust'), 
    		'Class does not have method UserCust_AuthenticateCust'
		);

		// 9.2
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_DepositReloadBonus'), 
    		'Class does not have method UserCust_DepositReloadBonus'
		);


		// 9.3
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_FPPBonus'), 
    		'Class does not have method UserCust_FPPBonus'
		);


		// 9.4
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_GetLockStatus'), 
    		'Class does not have method UserCust_GetLockStatus'
		);


		// 9.5
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_GetUserDetails'), 
    		'Class does not have method UserCust_GetUserDetails'
		);


		// 9.6
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_LobbyTablesNTournaments'), 
    		'Class does not have method UserCust_LobbyTablesNTournaments'
		);


		// 9.7
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_PlayersNTables'), 
    		'Class does not have method UserCust_PlayersNTables'
		);


		// 9.8
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_PullFlashClientTableIds'), 
    		'Class does not have method UserCust_PullFlashClientTableIds'
		);


		// 9.9
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_RakedHandsBonus'), 
    		'Class does not have method UserCust_RakedHandsBonus'
		);


		// 9.10
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_ReferAFriendBonusReferedTo'), 
    		'Class does not have method UserCust_ReferAFriendBonusReferedTo'
		);


		// 9.11
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_ReferAFriendBonusRefering'), 
    		'Class does not have method UserCust_ReferAFriendBonusRefering'
		);


		// 9.12
    	$this->assertTrue(
    		method_exists($this->client, 'UserCust_TournamentFeed'), 
    		'Class does not have method UserCust_TournamentFeed'
		);
		
	}


}
