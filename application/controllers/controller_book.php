<?php

class Controller_Book extends Controller
{
	public $model;
	
	function __construct()
	{
		$this->model = new Model_Book();
		$this->view = new View();
	}

	function action_index()
	{	
		session_start();

		$data['book'] = false;
		if (isset($_GET['id']) && !empty($_GET['id'])) {
			$data['book'] = $this -> model -> get_book();
		}
		if ($data['book'] != false) {
			if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
				$data['collections'] = $this -> model -> get_collections();
			}
			$this-> view -> generate('book_view.php', 'template_view.php', $data);
		} 
		else {
			$this-> view -> generate('book_view.php', 'template_view.php');
		}
	}

    
}