<?php

class Model_Registration extends Model 
{
    public function add_user() {
        $nickname = $_POST["nickname"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $date = $_POST['date'];
        $image = $_FILES['avatar'];

        $con = $this->database_connection();
        try {
            $sql_check_user = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password' ;";
            $result = mysqli_query($con, $sql_check_user);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
        }
        
        if(mysqli_num_rows($result) == 0){
            $imagenamehash = md5(explode('.', $_FILES['avatar']['name'])[0]) . '.' . explode('.', $_FILES['avatar']['name'])[1];

            if ($this -> __save_image($_FILES['avatar'], $imagenamehash)) {
                try {
                    $sql = "INSERT INTO users(nickname, email, password, date, avatar) VALUES ('$nickname', '$email', '$password', '$date', '$imagenamehash');";
                    $result = mysqli_query($con, $sql);
                } catch (mysqli_sql_exception $err) {
                    error_log($err, 0);
                    return false;
                }
                return true;
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }

    private function __save_image($image, $hash) {
        $uploaddir = IMAGEDIR . "avatars/";
        $uploadfile = $uploaddir . basename($hash);
        $filesize = 6 * 1024 * 1024;
        
        if (move_uploaded_file($image['tmp_name'], $uploadfile) && $image['size'] <= $filesize) {
            return true;
        }
        else {
            return false;
        }
    }
}