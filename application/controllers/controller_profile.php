<?php

class Controller_Profile extends Controller
{
	public $model;

    function __construct()
	{
		$this->model = new Model_Profile();
		$this->view = new View();
	}

	function action_index()
	{
		session_start();

		if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
            header('Location: /login');
        }
		
		$data['avatar'] = '/images/avatars/' . $_SESSION['avatar'];
		$data['nickname'] = $_SESSION['nickname'];
		$data['collections'] = $this -> model -> get_collections();
		
		$this->view->generate('profile_view.php', 'template_view.php', $data);
	}
}
