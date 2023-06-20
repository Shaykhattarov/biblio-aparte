<?php

class Controller_Collection extends Controller
{
    public $model;

	function __construct()
	{
		$this->model = new Model_Collection();
		$this->view = new View();
	}

	function action_index()
	{	
		session_start();

        if (!isset($_GET['id']) || empty($_GET['id'])) {
            header('Location: /profile_all_collections');
        }
        else {
            $data = $this -> model -> get_collection();
        }
		
		$this-> view -> generate('collection_view.php', 'template_view.php', $data);
	}
}