<?php

namespace VasilDakov\GDS\GenericPortalAdapter\Request;

class LoginRequest {


	/**
	 * @var string The unique identifier of the calling system. The UID must match a system that is set-up in the management system.
	*/
	public $systemUID;
	

	/**
	 * @var string The ID that identifies the client that the player tries to login from.
	*/
	public $clientUID;
	

	/**
	 * @var string The IP address of the player’s computer.
	*/
	public $clientIpAddress;
	

	/**
	 * @var string  The player’s username.
	*/
	public $username;
	

	/**
	 * @var string  The player’s password.
	*/
	public $password;
	
}