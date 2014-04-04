<?php 

use VasilDakov\GDS\GenericPortalAdapter;
use VasilDakov\GDS\GenericPortalAdapter\RegisterRequest;
use VasilDakov\GDS\GenericPortalAdapter\LoginRequest;

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



    public function testRegisterRequestInstance() 
    {
        $client = new GenericPortalAdapter('./data/GenericPortalAdapter.wsdl', $options = array());

        $request = new RegisterRequest;
        $this->assertInstanceOf('\VasilDakov\GDS\GenericPortalAdapter\RegisterRequest', $request);

        $response = $client->Register($request);
        $this->assertTrue($response);
    }



    public function testLoginSuccess() 
    {
        $request = new LoginRequest;
        $request->username = 'valid_username';
        $request->password = 'valid_password';

        $response = TRUE; // use fixtures

        $this->client->expects($this->any())
                     ->method('Login')
                     ->will($this->returnValue($response));

        $this->assertTrue($response);

    }

    public function testLoginFailure() 
    {
        $request = new LoginRequest;
        $request->username = 'invalid_username';
        $request->password = 'invalid_password';

        $response = FALSE; // use fixtures
        
        $this->client->expects($this->any())
                     ->method('Login')
                     ->will($this->returnValue($response));

        $this->assertFalse($response);
    }
       

    public function testLoginWithToken() {}

    public function testLogout() {}

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