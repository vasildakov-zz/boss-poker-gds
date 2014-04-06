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

use VasilDakov\GDS\GenericPortalAdapter\Request\RegisterRequest;
use VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest;
use VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest;

class GenericPortalAdapter extends \SoapClient { 


    const GPA_API_VERSION = '1.3.3';

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
     * @param RegisterRequest $request
     */
    public function Register(RegisterRequest $request) 
    {
        return $this->__soapCall('Register', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/',
            'soapaction' => ''
        ));
    }


    /**
     * Creates a session for a player and allows him to have access to session restricted services.
     * @param LoginRequest $request
     */
    public function Login(LoginRequest $request) 
    {
        return $this->__soapCall('Login', array($request), array(
            'uri' => 'bosscasinos/GDS/GenericPortalAdapter/',
            'soapaction' => ''
        ));
    }


    /**
     * Creates a session for a player and allows him to have access to session restricted services.
     */
    public function LoginWithToken($request) {}


    /**
     * Terminates a player session.
     */
    public function Logout($request) {}


    /**
     * Returns the balance of the players real money and bonus account balances.
     */
    public function GetAccountBalance($request) {}


    /**
     * Returns the game specific nickname associated with the player based on game system UID, 
     * if this doesn’t exist then returns the player’s preferred nickname and sets this to be the player’s 
     * game system specific nickname, when both are null returns blank.
     */
    public function GetNickName($request) {}


    /**
     * Returns player’s preferred nickname (if exist) and list of game system specific 
     * nicknames associated with the player. Each GameSystemNickName object contains 
     * 1) Game System UID, 2) Game System Name and 3) Player’s Game System specific nickname.
     */
    public function GetAllNickNames($request) {}


    /**
     * Set the game system specific nickname for the player based on provided game system UID. 
     * It also sets preferred nickname by performing a check, if the player doesn’t have preferred 
     * nickname then the game specific nickname will be set as preferred nickname provided no other 
     * player has the same preferred nickname when the player’s preferred nickname uniqueness level 
     * is set to whole system or per partner.
    */
    public function SetNickName($request) {}


    /**
     * Check if the given username is available.
     */
    public function IsUsernameAvailable($request) {}


    /**
     * Redeems a players loyalty points.
     */
    public function RedeemLoyaltyPoints($request) {}


    /**
     * Deducts loyalty points from a players loyalty points account.
     */
    public function DeductLoyaltyPoints($request) {}


    /**
     * Updates a player’s password to a new one if the old password matches the new one.
     */
    public function UpdatePassword($request) {}


    /**
     * Sends a new password to the player's registered email if the username matches an existing player.
     */
    public function RenewPassword($request) {}


    /**
     * Refers a friend to a player.
     */
    public function ReferAFriend($request) {}


    /**
     * Activates an existing inactive account.
     */
    public function ActivateAccount($parameters) {}


    /**
     * Verifies a player’s registered email address. 
     */
    public function VerifyEmail($parameters) {}


    /**
     * Verifies a player’s SMS.
     */
    public function VerifySMS($parameters) {}


    /**
     * Updates the details about a player. 
     * The following details can not be updated with this method: Username, TrackingCampaign, Password, Currency.
     */
    public function UpdatePlayerDetails($parameters) {}


    /**
     * Returns the details about a player.
     */
    public function GetPlayerDetails($parameters) {}


    /**
     * VerifyAuthenticationToken
     */
    public function VerifyAuthenticationToken($parameters) {}


    /**
     * This method gets the available balance that can be used for transfer to the specified game.
     */
    public function GetGameAccountBalance($parameters) {}


    /**
     * Creates an authentication token for a player. 
     * This token is used by an external system to login to GMS. 
     * This token has a limited validity time that is determined by the GMS server.
     */
    public function GetAuthenticationToken($parameters) {}


    /**
     * Returns an array with bonus reward details.
     */
    public function GetBonusRewardDetails($parameters) {}


    /**
     * Returns an array with pending payout details.
     */
    public function GetPendingPayoutDetails($parameters) {}


    /**
     * Returns the list of a players referred friends and their status.
     */
    public function GetReferAFriendStatus($parameters) {}


    /**
     * Returns a list of reward transactions during a time period.
     */
    public function GetRewardTransactions($parameters) {}


    /**
     * Returns a list of gaming transactions (the finished games) for the requested 
     * player during a time period. The amounts returned are in the players own currency.
     */
    public function GetGamingTransactions($parameters) {}


    /**
     * Returns a list of payment transactions for the requested player during a time period. 
     * The amounts returned are in the players own currency.
     */
    public function GetPaymentTransactions($parameters) {}


    /**
     * Returns an array of ongoing bonus balances per game.
     */
    public function GetBonusBalance($parameters) {}


    /**
     * Returns a list of all countries for a system or for system and partnerUID
     */
    public function GetAvailableCountries($parameters) {}


    /**
     * The total sum of the players result (win-staked) for requested time period in requested currency for a specific partner or for the operator. 
     * Result is cached and cache time could be configured, a minimum cache time is the time it takes to aggregate the data.
     */
    public function GetPayoutStatistics($parameters) {}


    /**
     * Returns a maximum of 20 players with biggest result (win-stake) during the requested time period. 
     * Result is cached and cache time could be configured, a minimum cache time is the time it takes to aggregate the data.
     */
    public function GetBiggestWinners($parameters) {}


    /**
     * Returns a list off recent players with positive player result (win-stake), this might be empty if the system is restarted or no one has won. 
     * Result is cached and cache time could be configured, a minimum cache time is the time it takes to aggregate the data.
     */
    public function GetRecentWinners($parameters) {}


    /**
     * Returns a maximum of 20 jackpot winners during the requested time period. 
     * Result is cached and cache time could be configured, a minimum cache time is the time it takes to aggregate the data.
     */
    public function GetJackpotWinners($parameters) {}


    /**
     * This method verifies an authentication token to find out the current GMS client user and the permissions of that user.
     */
    public function VerifyAdminUserAuthToken($parameters) {}


    /**
     * This method returns counters of how many unique players that currently are logged on to the different game clients. 
     * Result is cached and cache time could be configured.
     */
    public function GetCurrentPlayers($parameters) {}


    /**
     * This method validates a player session, either internally or externally depending on the partner associated with the game client. 
     */
    public function ValidatePlayerSession($parameters) {}


    /**
     * Register Promotion Code
     */
    public function RegisterPromotionCode($parameters) {}


    /**
     * Set the responsible gaming session time limit for the player.
     */
    public function SetSessionLimit($parameters) {}


    /**
     * Set Wager Limits
     */
    public function SetWagerLimits($parameters) {}


    /**
     * Set Loss Limits 
     */
    public function SetLossLimits($parameters) {}


    /**
     * Enable / disable reality check for the player.
     */
    public function SetRealityCheckEnabled($parameters) {}


    /**
     * Will Become Permanent
     */
    public function WillBecomePermanent($parameters) {}


    /**
     * Self Exclude
     */
    public function SelfExclude($parameters) {}


    /**
     * Returns all responsible gaming settings for the player.
     */
    public function GetResponsibleGamingSettings($parameters) {}


    /**
     * Returns a list of BonusMoneyBag(s) and PendingBonusMoneyBag(s) irrespective of the bag status for given player Id.
     */
    public function GetRewardDetails($parameters) {}


    /**
     * Returns a list of self exclusions for the player.
     */
    public function GetSelfExclusions($parameters) {}


    /**
     * Returns the Player Registration Levels available in GMS.
     */
    public function GetPlayerRegistrationLevels($parameters) {}
}