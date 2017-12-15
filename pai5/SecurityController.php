<?php

require_once('DBController.php');

class SecurityController {
	private $dbController;

	public function __construct() {
		$this->dbController = new DBController();
	}

	public function check() {
		$query = 'SELECT ip FROM BLACK_LIST';
		return true;
	}
}