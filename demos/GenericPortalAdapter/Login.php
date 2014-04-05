<?php
namespace VasilDakov;

include "../../src/GDS/GenericPortalAdapter.php";
include "../../src/GDS/GenericPortalAdapter/LoginRequest.php";

use VasilDakov\GDS\GenericPortalAdapter;
use	VasilDakov\GDS\GenericPortalAdapter\LoginRequest;

$wsdl = '../../data/GenericPortalAdapter.wsdl';
$client = new GenericPortalAdapter($wsdl, $options = array());

$request = new LoginRequest;

$response = $client->Login($request);
var_dump($response);
