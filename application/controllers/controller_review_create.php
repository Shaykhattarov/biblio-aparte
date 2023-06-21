<?php

class Controller_Review_Create extends Controller
{
    public $model;
    function __construct()
	{
		$this->model = new Model_Review_Create();
		$this->view = new View();
	}

    function action_index()
    {
        session_start();

        if (isset($_GET['book_id']) && !empty($_GET['book_id'])) {
            if (isset($_POST['text']) && !empty($_POST['text'])) {
                if (!$this -> model -> create_review()) {
                    $data['error'] = "Ошибка при создании рецензии!";
                } else {
                    header("Location: /book?id=". $_GET['book_id']);
                }
            }
        }
        else {
            header("Location: /");
        }

        $this->view->generate('review_create_view.php', 'template_view.php');
    }
}

?>