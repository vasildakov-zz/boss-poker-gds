<?php

include "../../src/GDS/GenericPortalAdapter.php";
include "../../src/GDS/GenericPortalAdapter/RegisterRequest.php";
include "../../src/GDS/GenericPortalAdapter/Collection/PlayerPropertyCollection.php";

use VasilDakov\GDS\GenericPortalAdapter,
	VasilDakov\GDS\GenericPortalAdapter\RegisterRequest,
	VasilDakov\GDS\GenericPortalAdapter\Collection\PlayerPropertyCollection;


$wsdl = '../../data/GenericPortalAdapter.wsdl';
$client = new GenericPortalAdapter($wsdl, $options = array());

$request = new RegisterRequest;
$request->systemUID = 66;
$request->clientUID = 998877;
$request->partnerUID = 86;
$request->ipAddress = '10.0.0.1';
// .....
$request->properties = new PlayerPropertyCollection;

$request->properties->offsetSet('Username', 'username');
$request->properties->offsetSet('Password', 'password');
$request->properties->offsetSet('FirstName', 'John');
$request->properties->offsetSet('LastName', 'Doe');

var_dump($request);
var_dump($request->properties->PlayerProperty);

$response = $client->Register($request);
var_dump($response);

