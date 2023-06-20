<?php

class Model_Main extends Model {
    
    private $result;

    public function get_books() 
    {
        $con = $this->database_connection();
        try {
            $sql = "SELECT * FROM books ORDER BY `rate` ASC;";
            $this->result = mysqli_query($con, $sql);
        } 
        catch (mysqli_sql_exception $err) {
            error_log($err, 0);
        }

        if (mysqli_num_rows($this -> result) > 0) {
            $data = [];
            while ($row = $this -> result -> fetch_array()) {
                array_push($data, $row);
            }

            return $data;
        }
        else {
            return [];
        }
    }
}