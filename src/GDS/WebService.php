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

	public function __construct() { }


	/**
	 * 8.1
	 * @param CheckMttTableEndRequest $request
	*/
	public function Poker_CheckMttTableEnd(CheckMttTableEndRequest $request) {}


	/**
	 * 8.2 Gets the data of the round.
	 * @param GetDataRequest $request
	 */
	public function Poker_GetData(GetDataRequest $request) {}


	/**
	 * 8.3
	 * @param GetFirstRoundRequest $request
	 */
	public function Poker_GetFirstRound(GetFirstRoundRequest $request) {}


	/**
	 * 8.4
	 * @param GetLastTableIdRequest $request
	 */
	public function Poker_GetLastTableId(GetLastTableIdRequest $request) {}


	/**
	 * 8.5
	 * @param GetMttRoundIdRequest $request
	 */
	public function Poker_GetMttRoundId(GetMttRoundIdRequest $request) {}


	/**
	 * 8.6
	 * @param GetMttTableIdRequest $request
	 */
	public function Poker_GetMttTableId(GetMttTableIdRequest $request) {}


	/**
	 * 8.7
	 * @param GetNextRoundRequest $request
	 */
	public function Poker_GetNextRound(GetNextRoundRequest $request) {}

	/**
	 * 8.8
	 * @param GetTableIdRequest $request
	 */
	public function Poker_GetTableId(GetTableIdRequest $request) {}


	/**
	 * 8.9
	 * @param GetTournamentIdRequest $request
	 */
	public function Poker_GetTournamentId(GetTournamentIdRequest $request) {}


	/**
	 * 8.10 The method will return an XML answer with aggregated data for all the poker players of the gaming system that have played.
	 * @param UserPlayInfoRequest $request
	 */
	public function Poker_UserPlayInfo(UserPlayInfoRequest $request) {}


	/**
	 * 8.11
	 * @param UserPlayNBlindsInfoRequest $request
	 */
	public function Poker_UserPlayNBlindsInfo(UserPlayNBlindsInfoRequest $request) {}

}