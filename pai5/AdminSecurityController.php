<?php
require_once('Controller.php');

class AdminSecurityController extends Controller {
	private $GET_ALL_QUERY = "SELECT * FROM BLACK_LIST";
	public $data = [];
	function __construct()
	{
		parent::__construct();
		if (isset($_GET["action"]) && $_GET["action"] === 'save') {
			$this->save();
		} else if (isset($_GET["action"]) && $_GET["action"] === 'delete' && isset($_GET["id"])) {
			$this->delete($_GET["id"]);
		} else {
			$this->getAll();
			$this->data["contentView"] = 'views/ip-list.php';
		}
		$data = $this->data;
		include('views/admin-template.php');
	}

	private function getAll() {
		$this->data["ip-list"] = $this->dbController->query($this->GET_ALL_QUERY);
	}

	private function save() {
		if (isset($_POST['submit'])) {
			$ip = htmlspecialchars($_POST["ip"]);

			$query = 'INSERT INTO BLACK_LIST(ip) VALUES("' . $ip . '")';
			$this->dbController->query($query);
			header("Location: AdminSecurityController.php");
			exit();
		}
	}

	private function delete($id) {
		$query = 'DELETE FROM BLACK_LIST WHERE ID="' . $id . '"';
		$this->dbController->query($query);
		header("Location: AdminSecurityController.php?action=delete");
		exit();
	}
}

new AdminSecurityController();