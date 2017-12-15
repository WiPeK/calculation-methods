<?php
require_once('Controller.php');
require_once('MenuController.php');
class ArticleController extends Controller
{
	private $data = [];
	private $GET_LATEST_QUERY = "SELECT * FROM ARTICLES WHERE ID = (SELECT MAX(ID) FROM ARTICLES)";
	
	private $GET_ALL_QUERY = "SELECT * FROM ARTICLES";

	private $menuController;

	function __construct()
	{
		parent::__construct();
		$this->menuController =  new MenuController();

		if (isset($_GET["id"])) {
			$this->data['article'] = $this->get($_GET["id"]);
			$this->data["menu"] = $this->menuController->getMenu();
			$data = $this->data;
			include('views/template.php');
		}
	}

	public function getAll() {
		return mysql_fetch_array($this->dbController->query($this->GET_ALL_QUERY));
	}

	public function getLatest() {
		return mysql_fetch_object($this->dbController->query($this->GET_LATEST_QUERY));
	}

	private function get($id) {
		$query = 'SELECT * FROM ARTICLES WHERE ID="' . $id . '"';
		return mysql_fetch_object($this->dbController->query($query));
	}
}

new ArticleController();