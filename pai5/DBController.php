<?php

class DBController
{
	private $user = 'root';
	private $haslo = '';
	private $host = 'localhost';
	private $baza = 'portal';

	private $BLACK_LIST_CREATE_QUERY = 
	"CREATE TABLE IF NOT EXISTS `BLACK_LIST` (
    `ID` int(11) unsigned NOT NULL auto_increment,
    `IP` varchar(40),
	PRIMARY KEY  (`ID`)
	)";

	private $ARTICLES_CREATE_QUERY = 
	"CREATE TABLE IF NOT EXISTS `ARTICLES` (
    `ID` int(11) unsigned NOT NULL auto_increment,
    `NAME` varchar(255),
    `CONTENT` TEXT,
    `TYPE` INT(1),
	PRIMARY KEY  (`ID`)
	)";

	private $dbConfig;
	
	function __construct()
	{	
		$id_conn = mysql_connect($this->host, $this->user, $this->haslo);
		mysql_select_db($this->baza);
		if($id_conn == false) die( 'BŁĄD dostępu do danych!');
		$this->initialize();
	}

	private function initialize() {
		mysql_query($this->BLACK_LIST_CREATE_QUERY);
		mysql_query($this->ARTICLES_CREATE_QUERY);
	}

	public function query($query) {
		return mysql_query($query);
	}
}