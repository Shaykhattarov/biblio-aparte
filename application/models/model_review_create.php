<?php

class Model_Review_Create extends Model
{
    private $result;

    function create_review() 
    {
        $text = $_POST['text'];
        $book_id = $_GET['book_id'];
        $user_id = $_SESSION['id'];

        $con = $this -> database_connection();
        try 
        {
            $sql = "INSERT INTO book_reviews(user_id, book_id, text) VALUES ($user_id, $book_id, '$text') ;";
            $res = mysqli_query($con, $sql);
        }
        catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }

        return true;
    }

}