<?php

class Controller_Collection_Create extends Controller
{
	public $model;

	function __construct()
	{
		$this->model = new Model_Collection_Create();
		$this->view = new View();
	}

	function action_index()
	{
		session_start();

		$data['create'] = false;

		if (isset($_POST['name']) && isset($_POST['description']) && isset($_FILES['file'])) {
			if (!$this->model->create_collection()) {
				$data['create'] = "Произошла ошибка при создании коллекции!";
			}
		}

		$this->view->generate('collection_create_view.php', 'template_view.php', $data);
	}
}
