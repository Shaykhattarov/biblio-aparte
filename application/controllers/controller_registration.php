<?php 
class Controller_Registration extends Controller
{
	public $model;
	function __construct()
	{
		$this->model = new Model_Registration();
		$this->view = new View();
	}

	function action_index()
	{
		$data["reg_status"] = "-";
		
		if (isset($_POST["nickname"]) && isset($_POST['date']) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST['cpassword']) && isset($_FILES['avatar'])) {
			if (strcmp($_POST['password'], $_POST['cpassword']) == 0) {
				if($this->model->add_user() == false){
					$data["reg_status"] = "Такой пользователь уже существует!";
				}
				else{
					header("Location: /login");
				}
			} 
			else {
				$data['reg_status'] = "Пароли должны быть одинаковы!";
			}
		}
		elseif (!isset($_POST["nickname"]) && !isset($_POST['date']) && !isset($_POST["email"]) && !isset($_POST["password"]) && !isset($_POST['cpassword'])){
			$data["reg_status"] = "-";
		}
		else {
			$data["reg_status"] = "Заполните все поля!";
		}

		$this->view->generate('registration_view.php', 'template_view.php', $data);
	}
	
}