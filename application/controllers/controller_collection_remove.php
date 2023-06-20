<?php

class Controller_Collection_Remove extends Controller
{
    public $model;

    function __construct()
	{
		$this->model = new Model_Collection_Remove();
		$this->view = new View();
	}

    public function action_index()
    {
        session_start();

        if (!isset($_GET['id']) && empty($_GET['id'])) {
            header('Location: /collections');
        }

        if (!$this -> model -> remove_collection()) {
            header('Location: /collections');
        }

        header('Location: /collections');
    }

}
