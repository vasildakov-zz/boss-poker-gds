<?php
/**
 * WebService Client
 * 
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @copyright Copyright 2014 Vasil Dakov
 * @package   GDS
 */
 
namespace VasilDakov\GDS;

use SoapClient;

class WebService extends \SoapClient {

	public function __construct() 
	{

	}

	public function Poker_CheckMttTableEnd() {}

	public function Poker_GetData() {}

	public function Poker_GetFirstRound() {}

	public function Poker_GetLastTableId() {}

	public function Poker_GetMttRoundId() {}

	public function Poker_GetMttTableId() {}

	public function Poker_GetNextRound() {}

	public function Poker_GetTableId() {}

	public function Poker_GetTournamentId() {}

	public function Poker_UserPlayInfo() {}

	public function Poker_UserPlayNBlindsInfo() {}

}