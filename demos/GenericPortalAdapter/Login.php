<?php
namespace VasilDakov;

include "../../src/GDS/GenericPortalAdapter.php";
include "../../src/GDS/GenericPortalAdapter/LoginRequest.php";
include "../../src/GDS/GenericPortalAdapter/LoginResponse.php";

use VasilDakov\GDS\GenericPortalAdapter;
use VasilDakov\GDS\GenericPortalAdapter\LoginRequest;
use VasilDakov\GDS\GenericPortalAdapter\LoginResponse;

$wsdl = '../../data/GenericPortalAdapter.wsdl';
$client = new GenericPortalAdapter($wsdl, $options = array());

$request = new LoginRequest;
$request->systemUID = 112233;
$request->clientUID = 9988;
$request->clientIpAddress = '10.1.1.1';
$request->username = "username";
$request->password = "xxxxxxxxxxxx"

$response = new LoginResponse;
$response = $client->Login($request);

var_dump($response->Result);
