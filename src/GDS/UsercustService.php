<?php
/**
 * UsercustService Client
 * 
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @copyright Copyright 2014 Vasil Dakov
 * @package   GDS
 */
 
namespace VasilDakov\GDS;

use SoapClient;

class UsercustService extends \SoapClient {

	public function __construct() 
	{

	}

	public function UserCust_AuthenticateCust() {}

	public function UserCust_DepositReloadBonus() {}

	public function UserCust_FPPBonus() {}

	public function UserCust_GetLockStatus() {}

	public function UserCust_GetUserDetails() {}

	public function UserCust_LobbyTablesNTournaments() {}

	public function UserCust_PlayersNTables() {}

	public function UserCust_PullFlashClientTableIds() {}

	public function UserCust_RakedHandsBonus() {}

	public function UserCust_ReferAFriendBonusReferedTo() {}

	public function UserCust_ReferAFriendBonusRefering() {}

	public function UserCust_TournamentFeed() {}

}