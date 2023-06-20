<?php

class Model_Profile extends Model {
    
    private $result;

    public function get_collections() 
    {
        $userid = $_SESSION['id'];
        $data = [];

        $con = $this->database_connection();
        try {
            $sql = "SELECT * FROM collections WHERE `user_id`='$userid' ;";
            $this->result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
        }

        if (mysqli_num_rows($this -> result) > 0) {
            while ($row = $this -> result -> fetch_array()) {
                $data[$row['id']]['id'] = $row['id'];
                $data[$row['id']]['name'] = $row['name'];
                $data[$row['id']]['image'] = $row['image'];
            }
        }

        return $data;
    } 

}
?>