<?php

require_once('DBController.php');
require_once('SecurityController.php');

abstract class Controller
{
	private $securityController;
	protected $dbController;
	
	function __construct()
	{
		$this->dbController = new DBController();
		$this->securityController = new SecurityController();
		$this->auth();
	}

	private function auth() {
		if (!($this->securityController->check())) {
			echo 'Access Denied';
			die();
		}
	}
}