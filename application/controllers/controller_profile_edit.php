<?php

class Controller_Profile_Edit extends Controller
{

    public $model;

    function __construct()
	{
		$this->model = new Model_Profile_Edit();
		$this->view = new View();
	}

    function action_index() {
        session_start();

        if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
            header('Location: /login');
        }

        $data['avatar'] = '/images/avatars/' . $_SESSION['avatar'];
        $data['avatar_change'] = false;
        $data['nickname_change'] = false;
        $data['password_change'] = false;

        if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
            if (!$this -> model -> change_avatar($_FILES['file'])) {
                $data['avatar_change'] = "Произошла ошибка при изменении аватарки!";
            }
        }

        if (!empty($_POST['password']) && !empty($_POST['npassword']) && !empty($_POST['rnpassword'])) {
            if (!$this -> model -> change_password($_POST['password'], $_POST['npassword'], $_POST['rnpassword'])) {
                $data['password_change'] = "Произошла ошибка при изменении пароля!";
            }
        }

        if (isset($_POST['name']) && !empty($_POST['name'])) {
            if (!$this -> model -> change_nickname($_POST['name'])) {
                $data['nickname_change'] = "Произошла ошибка при изменении никнейма";
            }
        }

        $data['nickname'] = $_SESSION['nickname'];

        $this->view->generate('profile_edit_view.php', 'template_view.php', $data);
    }

}
