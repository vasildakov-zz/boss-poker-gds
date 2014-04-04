<?php
/**
 * WarehouseServices Client
 * 
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @copyright Copyright 2014 Vasil Dakov
 * @package   GDS
 */


namespace VasilDakov\GDS;

// include __DIR__ . DIRECTORY_SEPARATOR . "config.php";
include "./config/config.php";

use VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityRequest;
use VasilDakov\GDS\WarehouseService\PlayerPokerGamingActivityResponse;
use SoapClient;


class WarehouseService extends \SoapClient {

	private static $classmap = array(
		'getPlayerPokerGamingActivity' => 'Warehouse_playerPokerGamingActivity',
		'getPlayerPokerGamingActivityResponse' => 'Warehouse_playerPokerGamingActivityResponse',
		'getPlayerRealMoneyTransaction' => 'Warehouse_PlayerRealMoneyTransaction',
		'getPlayerRealMoneyTransactionResponse' => 'Warehouse_PlayerRealMoneyTransactionResponse',
		'getPlayerBonusMoneyTransaction' => 'Warehouse_PlayerBonusMoneyTransaction',
		'getPlayerBonusMoneyTransactionResponse' => 'Warehouse_PlayerBonusMoneyTransactionResponse',
		'getDimensionPlayer' => 'Warehouse_DimensionPlayer',
		'getDimensionPlayerResponse' => 'Warehouse_DimensionPlayerResponse',
		'getDimensionPlayerAffiliate' => 'Warehouse_DimensionPlayerAffiliate',
		'getDimensionPlayerAffiliateResponse' => 'Warehouse_DimensionPlayerAffiliateResponse',
		'getDimensionGame' => 'Warehouse_DimensionGame',
		'getDimensionGameResponse' => 'Warehouse_DimensionGameResponse',
		'getDimensionProduct' => 'Warehouse_DimensionProduct',
		'getDimensionProductResponse' => 'Warehouse_DimensionProductResponse',
		'getGroupGameSession' => 'Warehouse_GroupGameSession',
		'getGroupGameSessionResponse' => 'Warehouse_GroupGameSessionResponse',
		'getReferCampaignReport' => 'Warehouse_ReferCampaignReport',
		'getReferCampaignReportResponse' => 'Warehouse_ReferCampaignReportResponse',
		'getTodaysAggScriptRuns' => 'Warehouse_TodaysAggScriptRuns',
		'getTodaysAggScriptRunsResponse' => 'Warehouse_TodaysAggScriptRunsResponse',
		'getCustomerAccountStates' => 'Warehouse_CustomerAccountStates',
		'getCustomerAccountStatesResponse' => 'Warehouse_CustomerAccountStatesResponse',
		'getAggPokerDaily' => 'Warehouse_AggPokerDaily',
		'getAggPokerDailyResponse' => 'Warehouse_AggPokerDailyResponse',
		'getAggCustProdDaily' => 'Warehouse_AggCustProdDaily',
		'getAggCustProdDailyResponse' => 'Warehouse_AggCustProdDailyResponse',
		'getAggTableDaily' => 'Warehouse_AggTableDaily',
		'getAggTableDailyResponse' => 'Warehouse_AggTableDailyResponse',
		'getAggSttDaily' => 'Warehouse_AggSttDaily',
		'getAggSttDailyResponse' => 'Warehouse_AggSttDailyResponse',
		'getAggMttDaily' => 'Warehouse_AggMttDaily',
		'getAggMttDailyResponse' => 'Warehouse_AggMttDailyResponse',
		'getAggProdDailyPlayerNumbers' => 'Warehouse_AggProdDailyPlayerNumbers',
		'getAggProdDailyPlayerNumbersResponse' => 'Warehouse_AggProdDailyPlayerNumbersResponse',
		'getAggProdGroupDailyRegistrations' => 'Warehouse_AggProdGroupDailyRegistrations',
		'getAggProdGroupDailyRegistrationsResponse' => 'Warehouse_AggProdGroupDailyRegistrationsResponse',
		'getAggLog' => 'Warehouse_AggLog',
		'getAggLogResponse' => 'Warehouse_AggLogResponse',
		'getDailyBalanceOut' => 'Warehouse_DailyBalanceOut',
		'getDailyBalanceOutResponse' => 'Warehouse_DailyBalanceOutResponse',
		'getSessionStakes' => 'Warehouse_SessionStakes',
	);



	public function __construct($wsdl = "", $options = array()) 
	{
		if( !$wsdl ) throw new \InvalidArgumentException;
		
		foreach(self::$classmap as $key => $value) {
			if(!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		parent::__construct($wsdl, $options);
	}	


	/**
	 * 7.2
	 * 
     * @param AggCustProdDailyRequest $request
     * @return Warehouse_AggCustProdDailyResponse
     */
	public function getAggCustProdDaily(AggCustProdDailyRequest $request) 
	{
		return $this->__soapCall('Warehouse_AggCustProdDaily', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.3 
	 * 
     * @param AggLogRequest $request
     * @return Warehouse_AggLogResponse
     */
	public function getAggLog(AggLogRequest $request) 
	{
		return $this->__soapCall('Warehouse_AggLog', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.4
	 * 
     * @param AggMttDailyRequest $request
     * @return Warehouse_AggMttDailyResponse
     */
	public function getAggMttDaily(AggMttDailyRequest $request) 
	{
		return $this->__soapCall('Warehouse_AggMttDaily', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.5
	 * 
     * @param AggPokerDailyRequest $request
     * @return Warehouse_AggPokerDailyResponse
     */
	public function getAggPokerDaily(AggPokerDailyRequest $request) 
	{
		return $this->__soapCall('Warehouse_AggPokerDaily', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.6
	 * 
     * @param AggProdDailyPlayerNumbersRequest $request
     * @return Warehouse_AggProdDailyPlayerNumbersResponse
     */
	public function getAggProdDailyPlayerNumbers(AggProdDailyPlayerNumbersRequest $request) 
	{
		return $this->__soapCall('Warehouse_AggProdDailyPlayerNumbers', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.7 
	 * 
     * @param AggProdGroupDailyRegistrationsRequest $request
     * @return Warehouse_AggProdGroupDailyRegistrationsResponse
     */
	public function getAggProdGroupDailyRegistrations(AggProdGroupDailyRegistrationsRequest $request) 
	{
		return $this->__soapCall('Warehouse_AggProdGroupDailyRegistrations', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.8 
	 * 
     * @param AggSttDailyRequest $request
     * @return Warehouse_AggSttDailyResponse
     */
	public function getAggSttDaily(AggSttDailyRequest $request) 
	{
		return $this->__soapCall('Warehouse_AggSttDaily', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.9 
	 * 
     * @param AggTableDailyRequest $request
     * @return Warehouse_AggTableDailyResponse
     */
	public function getAggTableDaily(AggTableDailyRequest $request) 
	{
		return $this->__soapCall('Warehouse_AggTableDaily', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.10
	 * 
     * @param CustomerAccountStatesRequest $request
     * @return Warehouse_CustomerAccountStatesResponse
     */
	public function getCustomerAccountStates(CustomerAccountStatesRequest $request) 
	{
		return $this->__soapCall('Warehouse_CustomerAccountStates', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.11 This method gives the total sum of all real money and bonus money tied up in the gaming system
	 * 
     * @param DailyBalanceOutRequest $request
     * @return Warehouse_DailyBalanceOutResponse
     */
	public function getDailyBalanceOut(DailyBalanceOutRequest $request) 
	{
		return $this->__soapCall('Warehouse_DailyBalanceOut', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}  


	/**
	 * 7.12 Returns the game dimension.
	 * 
     * @param DimensionGameRequest $request
     * @return Warehouse_DimensionGameResponse
     */
	public function getDimensionGame(DimensionGameRequest $request) 
	{
		return $this->__soapCall('Warehouse_DimensionGame', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.13 Returns the player dimension with all available player attributes.
	 * 
     * @param DimensionPlayerRequest $request
     * @return Warehouse_DimensionPlayerResponse
     */
	public function getDimensionPlayer(DimensionPlayerRequest $request) 
	{
		return $this->__soapCall('Warehouse_DimensionPlayer', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.14
	 * 
     * @param DimensionPlayerAffiliateRequest $request
     * @return Warehouse_DimensionPlayerAffiliateResponse
     */
	public function getDimensionPlayerAffiliate(DimensionPlayerAffiliateRequest $request) 
	{
		return $this->__soapCall('Warehouse_DimensionPlayerAffiliate', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.15 Returns the product dimension including the products related to the supplied product ID.
	 * 
     * @param DimensionProductRequest $request
     * @return Warehouse_DimensionProductResponse
     */
	public function getDimensionProduct(DimensionProductRequest $request) 
	{
		return $this->__soapCall('Warehouse_DimensionProduct', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.16 Returns all game sessions for a given day.
	 * 
     * @param GroupGameSessionRequest $request
     * @return Warehouse_GroupGameSessionResponse
     */
	public function getGroupGameSession(GroupGameSessionRequest $request) 
	{
		return $this->__soapCall('Warehouse_GroupGameSession', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.17 Returns all bonus payouts and bonus conversions per player, product, bonus ID and day.
	 * 
     * @param PlayerBonusMoneyTransactionRequest $request
     * @return Warehouse_PlayerBonusMoneyTransactionResponse
     */
	public function getPlayerBonusMoneyTransaction(PlayerBonusMoneyTransactionRequest $request) 
	{
		return $this->__soapCall('Warehouse_PlayerBonusMoneyTransaction', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.18 Returns all real money transactions per player, product and day.
	 * 
     * @param PlayerRealMoneyTransactionRequest $request
     * @return Warehouse_PlayerRealMoneyTransactionResponse
     */
	public function getPlayerRealMoneyTransaction(PlayerRealMoneyTransactionRequest $request) 
	{
		return $this->__soapCall('Warehouse_playerRealMoneyTransaction', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


	/**
	 * 7.19 
     * @param ReferCampaignReportRequest $request
     * @return Warehouse_ReferCampaignReportResponse
     */
	public function getReferCampaignReport(ReferCampaignReportRequest $request) 
	{
		return $this->__soapCall('Warehouse_ReferCampaignReport', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}

	/**
	 * 7.20 This method gives the limittype and stakes connected to a specific game_session_id. 
	 * The method only returns data for cash play. Black jack is excluded.
	 * 
     * @param SessionStakesRequest $request
     * @return Warehouse_SessionStakesResponse
     */
	public function getSessionStakes(SessionStakesRequest $request) 
	{
		return $this->__soapCall('Warehouse_SessionStakes', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
	 * 7.21 The method returns how many scripts that will be run at the supplied date and how many of these that have been run. 
	 * If the figures match, then all scripts have been run.
	 * 
     * @param TodaysAggScriptRunsRequest $request
     * @return Warehouse_TodaysAggScriptRunsResponse
     */
	public function getTodaysAggScriptRuns(TodaysAggScriptRunsRequest $request) 
	{
		return $this->__soapCall('Warehouse_TodaysAggScriptRuns', array($request), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
		));
	}


  	/**
  	 * 7.22 The method returns key poker figures per player, game, product and day.
  	 * 
     * @param PlayerPokerGamingActivityRequest $request
     * @return Warehouse_playerPokerGamingActivityResponse
     */
  	public function getPlayerPokerGamingActivity(PlayerPokerGamingActivityRequest $request) 
  	{
  		return $this->__soapCall('Warehouse_playerPokerGamingActivity', array($request), array(
  			'uri' => 'bosscasinos/GDS/WarehouseServices/',
  			'soapaction' => ''
  		));
  	}

}