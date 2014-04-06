<?php

namespace VasilDakov\GDS\GenericPortalAdapter\Request;

class UsernameAvailableRequest {


	/**
	 * @var string The unique identifier of the calling system. The UID must match a system that is set-up in the management system.
	*/
	public $systemUID;
	

	/**
	 * @var string The ID that identifies the client that the player tries to check the username availabillity from.
	*/
	public $clientUID;


	/**
	 * @var string The username that needs to be checked.
	*/
	public $username;	

}