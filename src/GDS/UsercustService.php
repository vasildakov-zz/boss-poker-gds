<?php
/**
 * UsercustService Client
 * 
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @copyright Copyright 2014 Vasil Dakov
 * @package   GDS\UsercustService
 */
 
namespace VasilDakov\GDS;

use SoapClient;

class UsercustService extends \SoapClient {

	public function __construct() 
	{

	}

	/**
	 * 9.1
	 * @param AuthenticateCustRequest $request
	 */
	public function UserCust_AuthenticateCust(AuthenticateCustRequest $request) {}


	/**
	 * 9.2
	 * @param DepositReloadBonusRequest $request
	 */
	public function UserCust_DepositReloadBonus(DepositReloadBonusRequest $request) {}


	/**
	 * 9.3
	 * @param FPPBonusRequest $request
	 */
	public function UserCust_FPPBonus(FPPBonusRequest $request) {}


	/**
	 * 9.4
	 * @param GetLockStatusRequest $request
	 */
	public function UserCust_GetLockStatus(GetLockStatusRequest $request) {}


	/**
	 * 9.5
	 * @param GetUserDetailsRequest $request
	 */
	public function UserCust_GetUserDetails(GetUserDetailsRequest $request) {}

	/**
	 * 9.6
	 * @param LobbyTablesNTournamentsRequest $request
	 */
	public function UserCust_LobbyTablesNTournaments(LobbyTablesNTournamentsRequest $request) {}


	/**
	 * 9.7
	 * @param PlayersNTablesRequest $request
	 */
	public function UserCust_PlayersNTables(PlayersNTablesRequest $request) {}


	/**
	 * 9.8
	 * @param PullFlashClientTableIdsRequest $request
	 */
	public function UserCust_PullFlashClientTableIds(PullFlashClientTableIdsRequest $request) {}


	/**
	 * 9.9
	 * @param RakedHandsBonusRequest $request
	 */
	public function UserCust_RakedHandsBonus(RakedHandsBonusRequest $request) {}


	/**
	 * 9.10
	 * @param ReferAFriendBonusReferedToRequest $request
	 */
	public function UserCust_ReferAFriendBonusReferedTo(ReferAFriendBonusReferedToRequest $request) {}


	/**
	 * 9.11
	 * @param ReferAFriendBonusReferingRequest $request
	 */
	public function UserCust_ReferAFriendBonusRefering(ReferAFriendBonusReferingRequest $request) {}


	/**
	 * 9.12
	 * @param TournamentFeedRequest $request
	 */
	public function UserCust_TournamentFeed(TournamentFeedRequest $request) {}

}