<?php
require_once('Controller.php');

class AdminArticleController extends Controller
{
	private $GET_ALL_QUERY = "SELECT * FROM ARTICLES";
	public $data = [];
	function __construct()
	{
		parent::__construct();
		if ($_GET["action"] === "edit") {
			$this->edit();
			$this->data["contentView"] = 'views/articles-list.php';
		} elseif ($_GET["action"] === "save") {
			$this->save();
		}elseif ($_GET["action"] === "delete" && !isset($_GET["id"])) {
			$this->getAll();
		} elseif ($_GET["action"] === "delete" && isset($_GET["id"]) && !empty($_GET["id"])) {
			$this->delete($_GET["id"]);
		}
		$data = $this->data;
		include('views/admin-template.php');
	}

	private function edit() {
		$this->data["contentView"] = 'views/article-edit.php';
	}

	private function save() {
		if (isset($_POST['submit'])) {
			$name = htmlspecialchars($_POST["name"]);
			$content = htmlspecialchars($_POST["content"]);
			$type = htmlspecialchars($_POST["type"]);

			$query = 'INSERT INTO ARTICLES(name, content, type) VALUES("' . $name . '","' . $content . '",' . $type . ')';
			$this->dbController->query($query);
			header("Location: index.php");
			exit();
		}
	}

	private function getAll() {
		$this->data["articles"] = $this->dbController->query($this->GET_ALL_QUERY);
	}

	private function delete($id) {
		$query = 'DELETE FROM ARTICLES WHERE ID="' . $id . '"';
		$this->dbController->query($query);
		header("Location: AdminArticleController.php?action=delete");
		exit();
	}
}

new AdminArticleController();
