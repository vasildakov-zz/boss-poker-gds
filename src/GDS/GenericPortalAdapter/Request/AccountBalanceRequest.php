<?php

namespace VasilDakov\GDS\GenericPortalAdapter\Request;

class AccountBalanceRequest {


	/**
	 * @var string The unique identifier of the calling system. The UID must match a system that is set-up in the management system.
	*/
	public $systemUID;
	

	/**
	 * @var string  The ID that identifies a player’s ongoing session.
	*/
	public $sessionID;
	
}