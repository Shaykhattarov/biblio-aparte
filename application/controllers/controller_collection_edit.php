<?php

class Controller_Collection_Edit extends Controller
{
	public $model;
    private $data;

    function __construct()
	{
		$this->model = new Model_Collection_Edit();
		$this->view = new View();
	}

    function action_index()
	{
        session_start();

        if (!isset($_GET['id']) && empty($_GET['id'])) {
            header('Location: /collections');
        }

        if (isset($_POST['name']) && !empty($_POST['name'])) {
            if (!$this -> model -> change_name()) {
                $this -> data['name'] = "Произошла ошибка при изменении имени!";
            }
        }

        if (isset($_POST['description']) && !empty($_POST['description'])) {
            if (!$this -> model -> change_description()) {
                $this -> data['description'] = "Произошла ошибка при изменении описания!";
            }
        }

        if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
            if (!$this -> model -> change_image()) {
                $this -> data['file'] = "Произошла ошибка при изменении имени!";
            }
        }

        $arr['collection'] = $this -> model -> get_collection();
        if ($arr['collection'] != false) {
            $this -> data['collection'] = $arr['collection'];
        }

        $this->view->generate('collection_edit_view.php', 'template_view.php', $this -> data);
    }

}