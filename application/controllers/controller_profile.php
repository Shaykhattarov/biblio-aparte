<?php

class Controller_Profile extends Controller
{

	function action_index()
	{
		session_start();

		if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
            header('Location: /login');
        }
		
		$data['avatar'] = '/images/avatars/' . $_SESSION['avatar'];
		$data['nickname'] = $_SESSION['nickname'];

		$this->view->generate('profile_view.php', 'template_view.php', $data);
	}
}
