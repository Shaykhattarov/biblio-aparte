<?php

class Model_Collection extends Model 
{
    private $result;
    private $books;

    function get_collection() 
    {
        $collection_id = $_GET['id'];

        // Получим данные по коллекции
        $con = $this->database_connection();
        try {
            $sql = "SELECT * FROM collections WHERE `id`=$collection_id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }
        
        if (mysqli_num_rows($this -> result) > 0) {
            $data['header'] = [];
            while ($row = $this -> result -> fetch_array()) {
                array_push($data['header'], $row);
            }
        }
        else {
            return false;
        }
        
        // Получим книги из коллекции
        try {
            $sql = "SELECT * FROM collection_items WHERE `collection_id`=$collection_id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }   

        if (mysqli_num_rows($this -> result) > 0) {
            $data['books'] = [];
            
            while ($row = $this -> result -> fetch_array()) {
                $book_id = $row['book_id'];

                //Ищем книгу

                try {
                    $sql = "SELECT * FROM books WHERE `id`=$book_id ;";
                    $this -> books = mysqli_query($con, $sql);
                } catch (mysqli_sql_exception $err) {
                    error_log($err, 0);
                }

                if (mysqli_num_rows($this -> books) > 0) {
                    while ($row2 = $this -> books -> fetch_array()) {
                        array_push($data['books'], $row2);
                    }
                }
            }

            return $data;
        }
        else {
            return false;
        }
    }

}