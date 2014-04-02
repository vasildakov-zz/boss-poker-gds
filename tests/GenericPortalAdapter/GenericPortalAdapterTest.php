<?php 

use VasilDakov\GDS\GenericPortalAdapter;

class GenericPortalAdapterTest extends PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		$this->wsdl = './data/GenericPortalAdapter.wsdl';
		$this->client = new GenericPortalAdapter($this->wsdl, $options = array());
	}

    public function testConstruct()
    {
        $this->assertInstanceOf('\VasilDakov\GDS\GenericPortalAdapter', $this->client);
    }


    public function testInheritance()
    {
        $functions = $this->client->__getFunctions();
        $this->assertInternalType('array', $functions);
        $this->assertCount(48, $functions);
    }



    public function testRegister() 
    {
        $parameters = array('bar' => 'foo');
        $response = $this->client->Register($parameters);
    }


    /**
     * @expectedException InvalidArgumentException
     */
    public function testRegisterThrowsException() 
    {
        $parameters = array();
        $this->client->Register($parameters);
    }



    public function testRegisterThrowsException2() 
    {
        $parameters = array();
        $this->setExpectedException('InvalidArgumentException');
        $this->client->Register($parameters);
    }



    public function testLogin() {}

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