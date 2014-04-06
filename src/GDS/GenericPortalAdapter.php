<?php
/**
 * GenericPortalAdapter Client
 * 
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @copyright Copyright 2014 Vasil Dakov
 * @package   GDS
 */

namespace VasilDakov\GDS;

use VasilDakov\GDS\GenericPortalAdapter\Request\RegisterRequest;
use VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest;
use VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest;

class GenericPortalAdapter extends \SoapClient { 


    const API_VERSION = '1.3.3';

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


    /**
     * This method will register a player in GMS.
     * 
     * @param RegisterRequest $request
     */
    public function Register(RegisterRequest $request) 
    {
        return $this->__soapCall('Register', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Creates a session for a player and allows him to have access to session restricted services.
     * 
     * @param LoginRequest $request
     */
    public function Login(LoginRequest $request) 
    {
        return $this->__soapCall('Login', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Creates a session for a player and allows him to have access to session restricted services.
     * 
     * @param $request  LoginWithTokenRequest 
     */
    public function LoginWithToken(LoginWithTokenRequest $request) 
    {
        return $this->__soapCall('LoginWithToken', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Terminates a player session.
     * 
     * @param $request  LogoutRequest 
     */
    public function Logout(LogoutRequest $request) 
    {
        return $this->__soapCall('Logout', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Returns the balance of the players real money and bonus account balances.
     * 
     * @param $request  AccountBalanceRequest
     */
    public function GetAccountBalance(AccountBalanceRequest $request) 
    {
        return $this->__soapCall('GetAccountBalance', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Returns the game specific nickname associated with the player based on game system UID, 
     * if this doesn’t exist then returns the player’s preferred nickname and sets this to be the player’s 
     * game system specific nickname, when both are null returns blank.
     * 
     * @param $request  GetNickNameRequest
     */
    public function GetNickName(GetNickNameRequest $request) 
    {
        return $this->__soapCall('GetNickName', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Returns player’s preferred nickname (if exist) and list of game system specific 
     * nicknames associated with the player. Each GameSystemNickName object contains 
     * 1) Game System UID, 2) Game System Name and 3) Player’s Game System specific nickname.
     * 
     * @param $request  GetAllNickNamesRequest
     */
    public function GetAllNickNames(GetAllNickNamesRequest $request) 
    {
        return $this->__soapCall('GetAllNickNames', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Set the game system specific nickname for the player based on provided game system UID. 
     * It also sets preferred nickname by performing a check, if the player doesn’t have preferred 
     * nickname then the game specific nickname will be set as preferred nickname provided no other 
     * player has the same preferred nickname when the player’s preferred nickname uniqueness level 
     * is set to whole system or per partner.
     * 
     * @param $request  SetNickNameRequest
     */
    public function SetNickName(SetNickNameRequest $request) 
    {
        return $this->__soapCall('SetNickName', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Check if the given username is available.
     * 
     * @param $request  UsernameAvailableRequest
     */
    public function IsUsernameAvailable(UsernameAvailableRequest $request) 
    {
        return $this->__soapCall('IsUsernameAvailable', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/', 'soapaction' => ''
        ));
    }


    /**
     * Redeems a players loyalty points.
     * @param $request
     */
    public function RedeemLoyaltyPoints($request) {}


    /**
     * Deducts loyalty points from a players loyalty points account.
     * @param $request
     */
    public function DeductLoyaltyPoints($request) {}


    /**
     * Updates a player’s password to a new one if the old password matches the new one.
     * @param $request
     */
    public function UpdatePassword($request) {}


    /**
     * Sends a new password to the player's registered email if the username matches an existing player.
     * @param $request
     */
    public function RenewPassword($request) {}


    /**
     * Refers a friend to a player.
     * @param $request
     */
    public function ReferAFriend($request) {}


    /**
     * Activates an existing inactive account.
     * @param $request
     */
    public function ActivateAccount($request) {}


    /**
     * Verifies a player’s registered email address. 
     * @param $request
     */
    public function VerifyEmail($request) {}


    /**
     * Verifies a player’s SMS.
     * @param $request
     */
    public function VerifySMS($request) {}


    /**
     * Updates the details about a player. 
     * The following details can not be updated with this method: Username, TrackingCampaign, Password, Currency.
     * @param $request
     */
    public function UpdatePlayerDetails($request) {}


    /**
     * Returns the details about a player.
     * @param $request
     */
    public function GetPlayerDetails($request) {}


    /**
     * VerifyAuthenticationToken
     * @param $request
     */
    public function VerifyAuthenticationToken($request) {}


    /**
     * This method gets the available balance that can be used for transfer to the specified game.
     * @param $request
     */
    public function GetGameAccountBalance($request) {}


    /**
     * Creates an authentication token for a player. 
     * This token is used by an external system to login to GMS. 
     * This token has a limited validity time that is determined by the GMS server.
     * @param $request
     */
    public function GetAuthenticationToken($request) {}


    /**
     * Returns an array with bonus reward details.
     * @param $request
     */
    public function GetBonusRewardDetails($request) {}


    /**
     * Returns an array with pending payout details.
     * @param $request
     */
    public function GetPendingPayoutDetails($request) {}


    /**
     * Returns the list of a players referred friends and their status.
     * @param $request
     */
    public function GetReferAFriendStatus($request) {}


    /**
     * Returns a list of reward transactions during a time period.
     * @param $request
     */
    public function GetRewardTransactions($request) {}


    /**
     * Returns a list of gaming transactions (the finished games) for the requested 
     * player during a time period. The amounts returned are in the players own currency.
     * @param $request
     */
    public function GetGamingTransactions($request) {}


    /**
     * Returns a list of payment transactions for the requested player during a time period. 
     * The amounts returned are in the players own currency.
     * @param $request
     */
    public function GetPaymentTransactions($request) {}


    /**
     * Returns an array of ongoing bonus balances per game.
     * @param $request
     */
    public function GetBonusBalance($request) {}


    /**
     * Returns a list of all countries for a system or for system and partnerUID
     * @param $request
     */
    public function GetAvailableCountries($request) {}


    /**
     * The total sum of the players result (win-staked) for requested time period in requested currency for a specific partner or for the operator. 
     * Result is cached and cache time could be configured, a minimum cache time is the time it takes to aggregate the data.
     * @param $request
     */
    public function GetPayoutStatistics($request) {}


    /**
     * Returns a maximum of 20 players with biggest result (win-stake) during the requested time period. 
     * Result is cached and cache time could be configured, a minimum cache time is the time it takes to aggregate the data.
     * @param $request
     */
    public function GetBiggestWinners($request) {}


    /**
     * Returns a list off recent players with positive player result (win-stake), this might be empty if the system is restarted or no one has won. 
     * Result is cached and cache time could be configured, a minimum cache time is the time it takes to aggregate the data.
     * @param $request
     */
    public function GetRecentWinners($request) {}


    /**
     * Returns a maximum of 20 jackpot winners during the requested time period. 
     * Result is cached and cache time could be configured, a minimum cache time is the time it takes to aggregate the data.
     * @param $request
     */
    public function GetJackpotWinners($request) {}


    /**
     * This method verifies an authentication token to find out the current GMS client user and the permissions of that user.
     * @param $request
     */
    public function VerifyAdminUserAuthToken($request) {}


    /**
     * This method returns counters of how many unique players that currently are logged on to the different game clients. 
     * Result is cached and cache time could be configured.
     * @param $request
     */
    public function GetCurrentPlayers($request) {}


    /**
     * This method validates a player session, either internally or externally depending on the partner associated with the game client. 
     * @param $request
     */
    public function ValidatePlayerSession($request) {}


    /**
     * Register Promotion Code
     * @param $request
     */
    public function RegisterPromotionCode($request) {}


    /**
     * Set the responsible gaming session time limit for the player.
     * @param $request
     */
    public function SetSessionLimit($request) {}


    /**
     * Set Wager Limits
     * @param $request
     */
    public function SetWagerLimits($request) {}


    /**
     * Set Loss Limits 
     * @param $request
     */
    public function SetLossLimits($request) {}


    /**
     * Enable / disable reality check for the player.
     * @param $request
     */
    public function SetRealityCheckEnabled($request) {}


    /**
     * Will Become Permanent
     * @param $request
     */
    public function WillBecomePermanent($request) {}


    /**
     * Self Exclude
     * @param $request
     */
    public function SelfExclude($request) {}


    /**
     * Returns all responsible gaming settings for the player.
     * @param $request
     */
    public function GetResponsibleGamingSettings($request) {}


    /**
     * Returns a list of BonusMoneyBag(s) and PendingBonusMoneyBag(s) irrespective of the bag status for given player Id.
     * @param $request
     */
    public function GetRewardDetails($request) {}


    /**
     * Returns a list of self exclusions for the player.
     * @param $request
     */
    public function GetSelfExclusions($request) {}


    /**
     * Returns the Player Registration Levels available in GMS.
     * @param $request
     */
    public function GetPlayerRegistrationLevels($request) {}
}