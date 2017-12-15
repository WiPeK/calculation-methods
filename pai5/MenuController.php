<?php

require_once('Controller.php');

class MenuController extends Controller
{
	private $QUERY = "SELECT * FROM ARTICLES";
	
	function __construct()
	{
		parent::__construct();
	}

	public function getMenu() {
		return $this->dbController->query($this->QUERY);
	}
}