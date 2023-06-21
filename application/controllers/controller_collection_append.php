<?php 

class Controller_Collection_Append extends Controller
{
    public $model;

    function __construct()
    {
        $this->model = new Model_Collection_Append();
		$this->view = new View();
    }

    function action_index()
    {
        session_start();
        $book_id = $_GET['referer'];

        if (!$this -> model -> append_collection()) {
            $data['error'] = "Ошибка при добавлении в коллекцию!";
        }

        header("Location: /book?id=$book_id");
    }
}

?>