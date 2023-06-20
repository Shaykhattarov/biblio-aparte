<?php

class Model_Profile_All_Collections extends Model
{
    private $result;

    public function get_collections() 
    {
        $userid = $_SESSION['id'];
        // Получим списко коллекций
        $con = $this->database_connection();
        try {
            $sql = "SELECT * FROM collections WHERE `user_id`=$userid ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }

        if (mysqli_num_rows($this -> result) > 0) {
            $data = [];
            while ($row = $this -> result -> fetch_array()) {
                array_push($data, $row);
            }
            return $data;
        }
        else {
            return false;
        }
    }


}
