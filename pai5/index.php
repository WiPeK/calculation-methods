<?php

require_once('Controller.php');
require_once('MenuController.php');
require_once('ArticleController.php');

class Index
{
	private $menuController;
	private $articlesController;
	
	function __construct()
	{
		$this->menuController =  new MenuController();
		$this->articlesController = new ArticleController();

		$data["menu"] = $this->menuController->getMenu();
		$data["article"] = $this->articlesController->getLatest();
		include('views/template.php');
	}
}

new Index();