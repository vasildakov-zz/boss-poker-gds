<?php 

use VasilDakov\GDS\GenericPortalAdapter\RegisterRequest;
use VasilDakov\GDS\GenericPortalAdapter\Collection\PlayerPropertyCollection;

class RegisterRequestTest extends \PHPUnit_Framework_TestCase {


	public function setUp() 
	{
		parent::setUp();
	}


	public function testRegisterRequestHasProperties() 
	{
		$request = new RegisterRequest;

		$this->assertClassHasAttribute('systemUID', 'VasilDakov\GDS\GenericPortalAdapter\RegisterRequest');
		$this->assertClassHasAttribute('clientUID', 'VasilDakov\GDS\GenericPortalAdapter\RegisterRequest');
		$this->assertClassHasAttribute('partnerUID', 'VasilDakov\GDS\GenericPortalAdapter\RegisterRequest');
		$this->assertClassHasAttribute('ipAddress', 'VasilDakov\GDS\GenericPortalAdapter\RegisterRequest');
		$this->assertClassHasAttribute('promotionCode', 'VasilDakov\GDS\GenericPortalAdapter\RegisterRequest');
		$this->assertClassHasAttribute('visitorID', 'VasilDakov\GDS\GenericPortalAdapter\RegisterRequest');
		$this->assertClassHasAttribute('registrationLevel', 'VasilDakov\GDS\GenericPortalAdapter\RegisterRequest');
		$this->assertClassHasAttribute('properties', 'VasilDakov\GDS\GenericPortalAdapter\RegisterRequest');
	}

	public function testRegisterRequestPropertyProperties() 
	{

		$request = new RegisterRequest;

		// the request properties must be an instance of PlayerPropertyCollection
		$this->assertInstanceOf('VasilDakov\GDS\GenericPortalAdapter\Collection\PlayerPropertyCollection', $request->properties);
		

		// PlayerPropertyCollection must have property PlayerProperty
		$this->assertClassHasAttribute('PlayerProperty', 'VasilDakov\GDS\GenericPortalAdapter\Collection\PlayerPropertyCollection');

		$collection = new PlayerPropertyCollection;	

		// PlayerProperty must be an array
		$this->assertTrue( is_array($collection->PlayerProperty) );

		// PlayerProperty must be empty
		$this->assertEmpty( $collection->PlayerProperty );

		
		$collection->offsetSet('TrackingCampaign', 123456);
		$collection->offsetSet('Username', 'usernamestring');
		$collection->offsetSet('Password', '123abc789');
		$collection->offsetSet('FirstName', '1');
		$collection->offsetSet('LastName', '1');
		$collection->offsetSet('NickName', '1');
		$collection->offsetSet('Gender', '1');
		$collection->offsetSet('BirthDate', '1');

		$collection->offsetSet('PreferredLanguage', '1');
		$collection->offsetSet('AcceptsEmail', '1');
		$collection->offsetSet('AcceptsRewards', '1');
		$collection->offsetSet('IsRewardAbuser', '1');

		$collection->offsetSet('SecurityWord', '1');
		$collection->offsetSet('SecurityPrompt', '1');
		$collection->offsetSet('Newsletter', '1');
		$collection->offsetSet('FrequentPlayerLevel', '1');
		$collection->offsetSet('IsMessageOptoutPromo', '1');
		$collection->offsetSet('HeardAboutUs', '1');
		$collection->offsetSet('Currency', '1');

		$collection->offsetSet('Title', '1');
		$collection->offsetSet('MiddleName', '1');
		$collection->offsetSet('AddressVerified', '1');
		$collection->offsetSet('IdentificationVerified', '1');

		$collection->offsetSet('TnCVersionID', '1');
		$collection->offsetSet('Citizenship', '1');
		$collection->offsetSet('AcceptsSMS', '1');
		$collection->offsetSet('AcceptsPromotionalSMS', '1');

		$collection->offsetSet('PreferredCommunicationChannel', '1');
		$collection->offsetSet('PreferredPaymentMode', '1');
		$collection->offsetSet('Email', '1');
		$collection->offsetSet('Address1', '1');
		$collection->offsetSet('Address2', '1');
		$collection->offsetSet('Address3', '1');
		$collection->offsetSet('PostalCode', '1');
		$collection->offsetSet('City', '1');
		$collection->offsetSet('Region', '1');
		$collection->offsetSet('Country', '1');

		$collection->offsetSet('Phone1', '1');
		$collection->offsetSet('Phone2', '1');
		$collection->offsetSet('MobilePhone', '1');

		$collection->offsetSet('SecurityCode', '1');
		$collection->offsetSet('SocialSecurityNumber', '1');
		$collection->offsetSet('IdentificationIssuer', '1');
		$collection->offsetSet('TaxCategory', '1');


		// not empty colletion
		$this->assertNotEmpty($collection);


		// TrackingCampaign
		$this->assertArrayHasKey('TrackingCampaign', $collection->PlayerProperty);
		$this->assertTrue( is_numeric($collection->offsetGet('TrackingCampaign') ));

		// Username
		$this->assertArrayHasKey('Username', $collection->PlayerProperty);
		$this->assertTrue( strlen($collection->offsetGet('Username')) > 5 );

		// Password
		$this->assertArrayHasKey('Password', $collection->PlayerProperty);
		$this->assertTrue( strlen($collection->offsetGet('Password')) > 5 );

		// FirstName
		$this->assertArrayHasKey('FirstName', $collection->PlayerProperty);

		// LastName
		$this->assertArrayHasKey('LastName', $collection->PlayerProperty);

		// NickName
		$this->assertArrayHasKey('NickName', $collection->PlayerProperty);

		// Gender
		$this->assertArrayHasKey('Gender', $collection->PlayerProperty);

		// BirthDate
		$this->assertArrayHasKey('BirthDate', $collection->PlayerProperty);

		// PostalCode
		$this->assertArrayHasKey('PostalCode', $collection->PlayerProperty);

		// City
		$this->assertArrayHasKey('City', $collection->PlayerProperty);

		// Region
		$this->assertArrayHasKey('Region', $collection->PlayerProperty);

		// Country
		$this->assertArrayHasKey('Country', $collection->PlayerProperty);
	}

}