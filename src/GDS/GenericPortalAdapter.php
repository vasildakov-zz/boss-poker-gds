<?php
/**
 * GenericPortalAdapter Client
 * 
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @copyright Copyright 2014 Vasil Dakov
 * @package   GDS
 * 
 */

namespace VasilDakov\GDS;

class GenericPortalAdapter  extends \SoapClient { 

	private static $classmap = array(
		'Register' => 'Register',
	);


    public function Register($parameters) 
    {
    	if( empty($parameters) ) throw new \InvalidArgumentException;
    }


	public function __construct($wsdl, $options = array()) 
	{
		foreach(self::$classmap as $key => $value) {
			if(!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		parent::__construct($wsdl, $options);
	}	

    public function Login($parameters) {}

    public function LoginWithToken($parameters) {}

    public function Logout($parameters) {}

    public function GetAccountBalance($parameters) {}

    public function GetNickName($parameters) {}

    public function GetAllNickNames($parameters) {}

    public function SetNickName($parameters) {}

    public function IsUsernameAvailable($parameters) {}

    public function RedeemLoyaltyPoints($parameters) {}

    public function DeductLoyaltyPoints($parameters) {}

    public function UpdatePassword($parameters) {}

    public function RenewPassword($parameters) {}

    public function ReferAFriend($parameters) {}

    public function ActivateAccount($parameters) {}

    public function VerifyEmail($parameters) {}

    public function VerifySMS($parameters) {}

    public function UpdatePlayerDetails($parameters) {}

    public function GetPlayerDetails($parameters) {}

    public function VerifyAuthenticationToken($parameters) {}

    public function GetGameAccountBalance($parameters) {}

    public function GetAuthenticationToken($parameters) {}

    public function GetBonusRewardDetails($parameters) {}

    public function GetPendingPayoutDetails($parameters) {}

    public function GetReferAFriendStatus($parameters) {}

    public function GetRewardTransactions($parameters) {}

    public function GetGamingTransactions($parameters) {}

    public function GetPaymentTransactions($parameters) {}

    public function GetBonusBalance($parameters) {}

    public function GetAvailableCountries($parameters) {}

    public function GetPayoutStatistics($parameters) {}

    public function GetBiggestWinners($parameters) {}

    public function GetRecentWinners($parameters) {}

    public function GetJackpotWinners($parameters) {}

    public function VerifyAdminUserAuthToken($parameters) {}

    public function GetCurrentPlayers($parameters) {}

    public function ValidatePlayerSession($parameters) {}

    public function RegisterPromotionCode($parameters) {}

    public function SetSessionLimit($parameters) {}

    public function SetWagerLimits($parameters) {}

    public function SetLossLimits($parameters) {}

    public function SetRealityCheckEnabled($parameters) {}

    public function WillBecomePermanent($parameters) {}

    public function SelfExclude($parameters) {}

    public function GetResponsibleGamingSettings($parameters) {}

    public function GetRewardDetails($parameters) {}

    public function GetSelfExclusions($parameters) {}

    public function GetPlayerRegistrationLevels($parameters) {}
}