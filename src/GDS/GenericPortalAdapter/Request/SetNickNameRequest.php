<?php

namespace VasilDakov\GDS\GenericPortalAdapter\Request;

class SetNickNameRequest {


	/**
	 * @var string The unique identifier of the game system.
	*/
	public $systemUID;
	

	/**
	 * @var string The unique identifier of the player session.
	*/
	public $sessionID;

	/**
	 * @var string The player’s game system specific nickname to set
	*/
	public $nickName;	

}