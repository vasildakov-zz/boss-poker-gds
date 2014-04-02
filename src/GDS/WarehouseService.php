<?php
/**
 * WarehouseServices Client
 * 
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @copyright Copyright 2014 Vasil Dakov
 * @package   GDS
 */


namespace VasilDakov\GDS;

include __DIR__ . DIRECTORY_SEPARATOR . "config.php";

use VasilDakov\GDS\WarehouseService\Warehouse_PlayerPokerGamingActivityRequest;
use VasilDakov\GDS\WarehouseService\Warehouse_PlayerPokerGamingActivityResponse;
use SoapClient;


class WarehouseService extends \SoapClient {

	private static $classmap = array(
		'Warehouse_PlayerPokerGamingActivity' => 'Warehouse_playerPokerGamingActivity',
		'Warehouse_PlayerPokerGamingActivityResponse' => 'Warehouse_playerPokerGamingActivityResponse',
		'Warehouse_PlayerRealMoneyTransaction' => 'Warehouse_PlayerRealMoneyTransaction',
		'Warehouse_PlayerRealMoneyTransactionResponse' => 'Warehouse_PlayerRealMoneyTransactionResponse',
		'Warehouse_PlayerBonusMoneyTransaction' => 'Warehouse_PlayerBonusMoneyTransaction',
		'Warehouse_PlayerBonusMoneyTransactionResponse' => 'Warehouse_PlayerBonusMoneyTransactionResponse',
		'Warehouse_DimensionPlayer' => 'Warehouse_DimensionPlayer',
		'Warehouse_DimensionPlayerResponse' => 'Warehouse_DimensionPlayerResponse',
		'Warehouse_DimensionPlayerAffiliate' => 'Warehouse_DimensionPlayerAffiliate',
		'Warehouse_DimensionPlayerAffiliateResponse' => 'Warehouse_DimensionPlayerAffiliateResponse',
		'Warehouse_DimensionGame' => 'Warehouse_DimensionGame',
		'Warehouse_DimensionGameResponse' => 'Warehouse_DimensionGameResponse',
		'Warehouse_DimensionProduct' => 'Warehouse_DimensionProduct',
		'Warehouse_DimensionProductResponse' => 'Warehouse_DimensionProductResponse',
		'Warehouse_GroupGameSession' => 'Warehouse_GroupGameSession',
		'Warehouse_GroupGameSessionResponse' => 'Warehouse_GroupGameSessionResponse',
		'Warehouse_ReferCampaignReport' => 'Warehouse_ReferCampaignReport',
		'Warehouse_ReferCampaignReportResponse' => 'Warehouse_ReferCampaignReportResponse',
		'Warehouse_TodaysAggScriptRuns' => 'Warehouse_TodaysAggScriptRuns',
		'Warehouse_TodaysAggScriptRunsResponse' => 'Warehouse_TodaysAggScriptRunsResponse',
		'Warehouse_CustomerAccountStates' => 'Warehouse_CustomerAccountStates',
		'Warehouse_CustomerAccountStatesResponse' => 'Warehouse_CustomerAccountStatesResponse',
		'Warehouse_AggPokerDaily' => 'Warehouse_AggPokerDaily',
		'Warehouse_AggPokerDailyResponse' => 'Warehouse_AggPokerDailyResponse',
		'Warehouse_AggCustProdDaily' => 'Warehouse_AggCustProdDaily',
		'Warehouse_AggCustProdDailyResponse' => 'Warehouse_AggCustProdDailyResponse',
		'Warehouse_AggTableDaily' => 'Warehouse_AggTableDaily',
		'Warehouse_AggTableDailyResponse' => 'Warehouse_AggTableDailyResponse',
		'Warehouse_AggSttDaily' => 'Warehouse_AggSttDaily',
		'Warehouse_AggSttDailyResponse' => 'Warehouse_AggSttDailyResponse',
		'Warehouse_AggMttDaily' => 'Warehouse_AggMttDaily',
		'Warehouse_AggMttDailyResponse' => 'Warehouse_AggMttDailyResponse',
		'Warehouse_AggProdDailyPlayerNumbers' => 'Warehouse_AggProdDailyPlayerNumbers',
		'Warehouse_AggProdDailyPlayerNumbersResponse' => 'Warehouse_AggProdDailyPlayerNumbersResponse',
		'Warehouse_AggProdGroupDailyRegistrations' => 'Warehouse_AggProdGroupDailyRegistrations',
		'Warehouse_AggProdGroupDailyRegistrationsResponse' => 'Warehouse_AggProdGroupDailyRegistrationsResponse',
		'Warehouse_AggLog' => 'Warehouse_AggLog',
		'Warehouse_AggLogResponse' => 'Warehouse_AggLogResponse',
		'Warehouse_DailyBalanceOut' => 'Warehouse_DailyBalanceOut',
		'Warehouse_DailyBalanceOutResponse' => 'Warehouse_DailyBalanceOutResponse',
		);


	/**
	 * constructor
	 */
	public function __construct($wsdl = "https://poker.pb.mt.bosscasinos.com/GDS/WarehouseServices.asmx?WSDL", $options = array()) 
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
     * @param Warehouse_playerPokerGamingActivity $parameters
     * @return Warehouse_playerPokerGamingActivityResponse
     */
  	public function Warehouse_PlayerPokerGamingActivity(Warehouse_PlayerPokerGamingActivityRequest $parameters) 
  	{
  		return $this->__soapCall('Warehouse_PlayerPokerGamingActivity', array($parameters), array(
  			'uri' => 'bosscasinos/GDS/WarehouseServices/',
  			'soapaction' => ''
  			)
  		);
  	}	



	/**
     * @param Warehouse_PlayerRealMoneyTransaction $parameters
     * @return Warehouse_PlayerRealMoneyTransactionResponse
     */
	public function Warehouse_PlayerRealMoneyTransaction(Warehouse_PlayerRealMoneyTransaction $parameters) 
	{
		return $this->__soapCall('Warehouse_PlayerRealMoneyTransaction', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_PlayerBonusMoneyTransaction $parameters
     * @return Warehouse_PlayerBonusMoneyTransactionResponse
     */
	public function Warehouse_PlayerBonusMoneyTransaction(Warehouse_PlayerBonusMoneyTransaction $parameters) 
	{
		return $this->__soapCall('Warehouse_PlayerBonusMoneyTransaction', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_DimensionPlayer $parameters
     * @return Warehouse_DimensionPlayerResponse
     */
	public function Warehouse_DimensionPlayer(Warehouse_DimensionPlayer $parameters) 
	{
		return $this->__soapCall('Warehouse_DimensionPlayer', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_DimensionPlayerAffiliate $parameters
     * @return Warehouse_DimensionPlayerAffiliateResponse
     */
	public function Warehouse_DimensionPlayerAffiliate(Warehouse_DimensionPlayerAffiliate $parameters) 
	{
		return $this->__soapCall('Warehouse_DimensionPlayerAffiliate', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_DimensionGame $parameters
     * @return Warehouse_DimensionGameResponse
     */
	public function Warehouse_DimensionGame(Warehouse_DimensionGame $parameters) 
	{
		return $this->__soapCall('Warehouse_DimensionGame', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_DimensionProduct $parameters
     * @return Warehouse_DimensionProductResponse
     */
	public function Warehouse_DimensionProduct(Warehouse_DimensionProduct $parameters) 
	{
		return $this->__soapCall('Warehouse_DimensionProduct', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_GroupGameSession $parameters
     * @return Warehouse_GroupGameSessionResponse
     */
	public function Warehouse_GroupGameSession(Warehouse_GroupGameSession $parameters) 
	{
		return $this->__soapCall('Warehouse_GroupGameSession', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_ReferCampaignReport $parameters
     * @return Warehouse_ReferCampaignReportResponse
     */
	public function Warehouse_ReferCampaignReport(Warehouse_ReferCampaignReport $parameters) 
	{
		return $this->__soapCall('Warehouse_ReferCampaignReport', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_TodaysAggScriptRuns $parameters
     * @return Warehouse_TodaysAggScriptRunsResponse
     */
	public function Warehouse_TodaysAggScriptRuns(Warehouse_TodaysAggScriptRuns $parameters) 
	{
		return $this->__soapCall('Warehouse_TodaysAggScriptRuns', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_CustomerAccountStates $parameters
     * @return Warehouse_CustomerAccountStatesResponse
     */
	public function Warehouse_CustomerAccountStates(Warehouse_CustomerAccountStates $parameters) 
	{
		return $this->__soapCall('Warehouse_CustomerAccountStates', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_AggPokerDaily $parameters
     * @return Warehouse_AggPokerDailyResponse
     */
	public function Warehouse_AggPokerDaily(Warehouse_AggPokerDaily $parameters) 
	{
		return $this->__soapCall('Warehouse_AggPokerDaily', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_AggCustProdDaily $parameters
     * @return Warehouse_AggCustProdDailyResponse
     */
	public function Warehouse_AggCustProdDaily(Warehouse_AggCustProdDaily $parameters) 
	{
		return $this->__soapCall('Warehouse_AggCustProdDaily', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_AggTableDaily $parameters
     * @return Warehouse_AggTableDailyResponse
     */
	public function Warehouse_AggTableDaily(Warehouse_AggTableDaily $parameters) 
	{
		return $this->__soapCall('Warehouse_AggTableDaily', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_AggSttDaily $parameters
     * @return Warehouse_AggSttDailyResponse
     */
	public function Warehouse_AggSttDaily(Warehouse_AggSttDaily $parameters) 
	{
		return $this->__soapCall('Warehouse_AggSttDaily', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_AggMttDaily $parameters
     * @return Warehouse_AggMttDailyResponse
     */
	public function Warehouse_AggMttDaily(Warehouse_AggMttDaily $parameters) 
	{
		return $this->__soapCall('Warehouse_AggMttDaily', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_AggProdDailyPlayerNumbers $parameters
     * @return Warehouse_AggProdDailyPlayerNumbersResponse
     */
	public function Warehouse_AggProdDailyPlayerNumbers(Warehouse_AggProdDailyPlayerNumbers $parameters) 
	{
		return $this->__soapCall('Warehouse_AggProdDailyPlayerNumbers', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}

	/**
     * @param Warehouse_AggProdGroupDailyRegistrations $parameters
     * @return Warehouse_AggProdGroupDailyRegistrationsResponse
     */
	public function Warehouse_AggProdGroupDailyRegistrations(Warehouse_AggProdGroupDailyRegistrations $parameters) 
	{
		return $this->__soapCall('Warehouse_AggProdGroupDailyRegistrations', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_AggLog $parameters
     * @return Warehouse_AggLogResponse
     */
	public function Warehouse_AggLog(Warehouse_AggLog $parameters) 
	{
		return $this->__soapCall('Warehouse_AggLog', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}


	/**
     * @param Warehouse_DailyBalanceOut $parameters
     * @return Warehouse_DailyBalanceOutResponse
     */
	public function Warehouse_DailyBalanceOut(Warehouse_DailyBalanceOut $parameters) 
	{
		return $this->__soapCall('Warehouse_DailyBalanceOut', array($parameters), array(
			'uri' => 'bosscasinos/GDS/WarehouseServices/',
			'soapaction' => ''
			)
		);
	}  	

}