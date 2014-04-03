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

use VasilDakov\GDS\GenericPortalAdapter\RegisterRequest;
use VasilDakov\GDS\GenericPortalAdapter\LoginRequest;

class GenericPortalAdapter extends \SoapClient { 

	private static $classmap = array(
    		'Register' => 'Register',
            'Login'    => 'Login',
            'Logout'   => 'Logout'
	);



	public function __construct($wsdl, $options = array()) 
	{
		foreach(self::$classmap as $key => $value) 
        {
			if(!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		parent::__construct($wsdl, $options);
	}	


    public function Register(RegisterRequest $request) 
    {
        return true;
    }


    public function Login(LoginRequest $request) 
    {
        return true;
    }

    public function LoginWithToken($request) {}

    public function Logout($request) {}

    public function GetAccountBalance($request) {}

    public function GetNickName($request) {}

    public function GetAllNickNames($request) {}

    public function SetNickName($request) {}

    public function IsUsernameAvailable($request) {}

    public function RedeemLoyaltyPoints($request) {}

    public function DeductLoyaltyPoints($request) {}

    public function UpdatePassword($request) {}

    public function RenewPassword($request) {}

    public function ReferAFriend($request) {}

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