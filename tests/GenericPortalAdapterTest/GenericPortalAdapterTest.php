<?php 

use VasilDakov\GDS\GenericPortalAdapter;
use VasilDakov\GDS\GenericPortalAdapter\Request\RegisterRequest;
use VasilDakov\GDS\GenericPortalAdapter\Request\LoginRequest;
use VasilDakov\GDS\GenericPortalAdapter\Request\LogoutRequest;
use VasilDakov\GDS\GenericPortalAdapter\Request\LoginWithTokenRequest;

use VasilDakov\GDS\GenericPortalAdapter\Response\LoginResponse;

class GenericPortalAdapterTest extends \PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		#$this->wsdl = './data/GenericPortalAdapter.wsdl';
		#$this->client = new GenericPortalAdapter($this->wsdl, $options = array());

        $wsdl = './data/GenericPortalAdapter.wsdl';
        $this->client = $this->getMockFromWsdl($wsdl, 'GenericPortalAdapter');

	}


    public function testConstruct()
    {
        $client = new GenericPortalAdapter('./data/GenericPortalAdapter.wsdl', $options = array());
        $this->assertInstanceOf('\VasilDakov\GDS\GenericPortalAdapter', $client);
    }


    public function testInheritance()
    {
        $client = new GenericPortalAdapter('./data/GenericPortalAdapter.wsdl', $options = array());
        $functions = $client->__getFunctions();
        $this->assertInternalType('array', $functions);
        $this->assertCount(48, $functions);
    }


    public function testGenericPortalAdapterHasAllMethods() 
    {
        $client = new GenericPortalAdapter('./data/GenericPortalAdapter.wsdl');

        $this->assertTrue(method_exists($client, 'Register'));
        $this->assertTrue(method_exists($client, 'Login'));
        $this->assertTrue(method_exists($client, 'LoginWithToken'));
        $this->assertTrue(method_exists($client, 'GetAccountBalance'));
        $this->assertTrue(method_exists($client, 'GetNickName'));
        $this->assertTrue(method_exists($client, 'GetAllNickNames'));
        $this->assertTrue(method_exists($client, 'SetNickName'));
        $this->assertTrue(method_exists($client, 'IsUsernameAvailable'));
        $this->assertTrue(method_exists($client, 'RedeemLoyaltyPoints'));
        $this->assertTrue(method_exists($client, 'DeductLoyaltyPoints'));
        $this->assertTrue(method_exists($client, 'UpdatePassword'));
        $this->assertTrue(method_exists($client, 'RenewPassword'));
        $this->assertTrue(method_exists($client, 'ReferAFriend'));
        $this->assertTrue(method_exists($client, 'ActivateAccount'));
        $this->assertTrue(method_exists($client, 'VerifyEmail'));
        $this->assertTrue(method_exists($client, 'VerifySMS'));
        $this->assertTrue(method_exists($client, 'UpdatePlayerDetails'));
        $this->assertTrue(method_exists($client, 'GetPlayerDetails'));
        $this->assertTrue(method_exists($client, 'VerifyAuthenticationToken'));
        $this->assertTrue(method_exists($client, 'GetGameAccountBalance'));
        $this->assertTrue(method_exists($client, 'GetAuthenticationToken'));
        $this->assertTrue(method_exists($client, 'GetBonusRewardDetails'));
        $this->assertTrue(method_exists($client, 'GetPendingPayoutDetails'));
        $this->assertTrue(method_exists($client, 'GetReferAFriendStatus'));
        $this->assertTrue(method_exists($client, 'GetRewardTransactions'));
        $this->assertTrue(method_exists($client, 'GetGamingTransactions'));
        $this->assertTrue(method_exists($client, 'GetPaymentTransactions'));
        $this->assertTrue(method_exists($client, 'GetBonusBalance'));
        $this->assertTrue(method_exists($client, 'GetAvailableCountries'));
        $this->assertTrue(method_exists($client, 'GetPayoutStatistics'));
        $this->assertTrue(method_exists($client, 'GetBiggestWinners'));
        $this->assertTrue(method_exists($client, 'GetRecentWinners'));
        $this->assertTrue(method_exists($client, 'GetJackpotWinners'));
        $this->assertTrue(method_exists($client, 'VerifyAdminUserAuthToken'));
        $this->assertTrue(method_exists($client, 'GetCurrentPlayers'));
        $this->assertTrue(method_exists($client, 'ValidatePlayerSession'));
        $this->assertTrue(method_exists($client, 'RegisterPromotionCode'));
        $this->assertTrue(method_exists($client, 'SetSessionLimit'));
        $this->assertTrue(method_exists($client, 'SetWagerLimits'));
        $this->assertTrue(method_exists($client, 'SetLossLimits'));
        $this->assertTrue(method_exists($client, 'SetRealityCheckEnabled'));
        $this->assertTrue(method_exists($client, 'WillBecomePermanent'));
        $this->assertTrue(method_exists($client, 'SelfExclude'));
        $this->assertTrue(method_exists($client, 'GetResponsibleGamingSettings'));
        $this->assertTrue(method_exists($client, 'GetRewardDetails'));
        $this->assertTrue(method_exists($client, 'GetSelfExclusions'));
        $this->assertTrue(method_exists($client, 'GetPlayerRegistrationLevels'));
    }



    public function testRegisterRequestInstance() 
    {
        $client = new GenericPortalAdapter('./data/GenericPortalAdapter.wsdl', $options = array());

        $request = new RegisterRequest;
        
        $this->assertInstanceOf('\VasilDakov\GDS\GenericPortalAdapter\Request\RegisterRequest', $request);
    }



    public function testLoginConnectionFailure() 
    {
        $client = new GenericPortalAdapter('./data/GenericPortalAdapter.wsdl', $options = array());
        
        $request = new LoginRequest;
        $request->systemUID = 123999;
        $request->clientUID = 7788;
        $request->clientIpAddress = '10.1.1.1';
        $request->username = 'username';
        $request->password = 'password';

        $this->setExpectedException('SoapFault', 'Could not connect to host');

        $response = new LoginResponse;
        $response = $client->Login( $request );
        
    }


    public function testLoginSuccess() 
    {
        $request = new LoginRequest;
        $request->username = 'valid_username';
        $request->password = 'valid_password';

        $response = new LoginResponse;
        $response->Result = new \StdClass;
        $response->Result->sessionID = "sessionstring";
        
        $this->client->expects($this->any())->method('Login')->will($this->returnValue($response));

        $this->assertInstanceOf("\VasilDakov\GDS\GenericPortalAdapter\Response\LoginResponse", $response);
        $this->assertEquals($response->Result->sessionID, "sessionstring");

        $this->assertEquals($response, $this->client->Login($request) );
    }


    /**
     * Login with non existing user
     */
    public function testLoginFailure() 
    {
        $request = new LoginRequest;
        $request->username = 'invalid_username';
        $request->password = 'invalid_password';

        $response = new LoginResponse;
        $response->Result = new \StdClass;
        $response->Result->sessionID = NULL;
        
        $this->client->expects($this->any())->method('Login')->will($this->returnValue($response));

        $this->assertNull($response->Result->sessionID);
        $this->assertEquals($response, $this->client->Login($request) );

        $this->assertInstanceOf("\VasilDakov\GDS\GenericPortalAdapter\Response\LoginResponse", $response);
        $this->setExpectedException('Exception', 'LoginForbiddenFault');

        throw new Exception('LoginForbiddenFault');
    }
       

    /**
     * Login with token
     */
    public function testLoginWithTokenSuccess() 
    {
        $request = new LoginWithTokenRequest;
        $request->systemUID = 1;
        $request->clientUID = 2;
        $request->clientIpAddress = '10.1.1.1';
        $request->authenticationToken = 'token';

        $response = new LoginResponse;
        $response->Result = new \StdClass;
        $response->Result->sessionID = 'sessionstring';

        $this->client->expects($this->any())->method('LoginWithToken')->will($this->returnValue($response));

        $this->assertEquals($response, $this->client->LoginWithToken($request) );
        $this->assertEquals($response->Result->sessionID, "sessionstring");

    }



    public function testLogoutConnectionFailure() 
    {
        $client = new GenericPortalAdapter('./data/GenericPortalAdapter.wsdl', $options = array());
        $request = new LogoutRequest; 
        $request->systemUID = 1;
        $request->sessionID = "sessionstring";

        $this->setExpectedException('SoapFault', 'Could not connect to host');
        $client->Logout($request);
    }



    public function testLogout() 
    {
        $request = new LogoutRequest; 
        $request->systemUID = 1;
        $request->sessionID = "sessionstring";

        $response = NULL;

        $this->client->expects($this->any())->method('Logout')->will($this->returnValue($response));
    }



    public function testGetAccountBalance() {}

    public function testGetNickName() {}

    public function testGetAllNickNames() {}

    public function testSetNickName() {}

    public function testIsUsernameAvailable() {}

    public function testRedeemLoyaltyPoints() {}

    public function testDeductLoyaltyPoints() {}

    public function testUpdatePassword() {}

    public function testRenewPassword() {}

    public function testReferAFriend() {}

    public function testActivateAccount() {}

    public function testVerifyEmail() {}

    public function testVerifySMS() {}

    public function testUpdatePlayerDetails() {}

    public function testGetPlayerDetails() {}

    public function testVerifyAuthenticationToken() {}

    public function testGetGameAccountBalance() {}

    public function testGetAuthenticationToken() {}

    public function testGetBonusRewardDetails() {}

    public function testGetPendingPayoutDetails() {}

    public function testGetReferAFriendStatus() {}

    public function testGetRewardTransactions() {}

    public function testGetGamingTransactions() {}

    public function testGetPaymentTransactions() {}

    public function testGetBonusBalance() {}

    public function testGetAvailableCountries() {}

    public function testGetPayoutStatistics() {}

    public function testGetBiggestWinners() {}

    public function testGetRecentWinners() {}

    public function testGetJackpotWinners() {}

    public function testVerifyAdminUserAuthToken() {}

    public function testGetCurrentPlayers() {}

    public function testValidatePlayerSession() {}

    public function testRegisterPromotionCode() {}

    public function testSetSessionLimit() {}

    public function testSetWagerLimits() {}

    public function testSetLossLimits() {}

    public function testSetRealityCheckEnabled() {}

    public function testWillBecomePermanent() {}

    public function testSelfExclude() {}

    public function testGetResponsibleGamingSettings() {}

    public function testGetRewardDetails() {}

    public function testGetSelfExclusions() {}

    public function testGetPlayerRegistrationLevels() {}




}