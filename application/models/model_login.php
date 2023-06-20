<?php

class Model_Login extends Model {
    
    private $result;

    function check_user() {

        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $con = $this->database_connection();
        try {
            $sql = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password';";
            $this->result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
        }

        if (mysqli_num_rows($this->result) == 0) {
            return false;
        }
        else {
            while ($row = $this -> result -> fetch_array()) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['nickname'] = $row['nickname'];
                $_SESSION['avatar'] = $row['avatar'];
                $_SESSION['email'] = $row['email'];
            }
            
            return true;
        }
        
    }
}

