<?php

class Controller_Main extends Controller
{
	public $model;
	
	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}

	function action_index()
	{	
		session_start();

		$data['books'] = $this -> model -> get_books();

		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}