<?php
return array(
	'wsdl' => "https://poker.pb.mt.bosscasinos.com/GDS/WarehouseServices.asmx?WSDL",
	'options' => array(
		'username' => "gds_awh", 
		'password' => "6u5EwraF", 
		'trace' => 1
	),
	'username' => 'gds_awh',
	'password' => '6u5EwraF',
	'systemId' => 48,
	'date' => '2014-03-01',
	'productGroupId' => 6670,
);

// phpunit --coverage-html coverage
// php vendor/bin/coveralls -v