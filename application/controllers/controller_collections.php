<?php 

class Controller_Collections extends Controller
{
    public $model;

    function __construct()
	{
		$this->model = new Model_Collections();
		$this->view = new View();
	}

	function action_index()
	{	
		session_start();
        
        $data['collections'] = $this -> model -> get_collections();

		$this->view->generate('collections_view.php', 'template_view.php', $data);
	}
}
?>