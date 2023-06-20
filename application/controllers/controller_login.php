<?php

class Controller_Login extends Controller
{ 	
	public $model;
	
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}

	function action_index() {
		session_start();
		$data["login_status"] = "-";
		if (isset($_POST["email"]) && isset($_POST["password"])) {
			if (!$this -> model -> check_user()){
				$data["login_status"] = "Введены неверные данные!";
			}
			else {
				header("Location: /profile");
			}
		}
		elseif(!isset($_POST["email"]) && !isset($_POST["password"])) {
			$data["login_status"] = "-";
		}
		else {
			$data["login_status"] = "Заполните все поля!";
		}

		$this->view->generate('login_view.php', 'template_view.php', $data);	
	}
}
