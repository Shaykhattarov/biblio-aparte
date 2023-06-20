<?php

class Controller_Profile_Collection extends Controller
{
    public $model;

	function __construct()
	{
		$this->model = new Model_Profile_Collection();
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
		
		$this-> view -> generate('profile_collection_view.php', 'template_view.php', $data);
	}
}