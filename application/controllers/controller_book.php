<?php

class Controller_Book extends Controller
{

	function action_index()
	{	
		session_start();
		
		$this-> view -> generate('book_view.php', 'template_view.php');
	}
}