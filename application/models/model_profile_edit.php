<?php

class Model_Profile_Edit extends Model 
{

    private $result;

    public function change_password($old_password, $new_password, $confirm_password) {
        if (strcmp($old_password, $new_password) == 0 || strcmp($new_password, $confirm_password) != 0) {
            return false;
        }

        $id = $_SESSION['id'];
        
        // Получим старый пароль из БД
        $con = $this->database_connection();
        try {
            $sql = "SELECT * FROM users WHERE `id`=$id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }

        while ($row = $this -> result -> fetch_array()) {
            $db_old_pass = $row['password'];
        }

        if (strcmp(md5($old_password), $db_old_pass) != 0) {
            return false;
        }

        // Сменим пароль
        $new_password = md5($new_password);
        $con = $this->database_connection();
        try {
            $sql = "UPDATE users SET `password`='$new_password' WHERE `id`=$id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }
        
        return true;
    }

    public function change_nickname($new_nickname) {
        $id = $_SESSION['id'];

        $con = $this->database_connection();
        try {
            $sql = "UPDATE users SET `nickname`='$new_nickname' WHERE `id`=$id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
        }

        $_SESSION['nickname'] = $new_nickname;
        return true;
    }

    public function change_avatar($new_avatar) {
        $id = $_SESSION['id'];
        $imagenamehash = md5(explode('.', $new_avatar['name'])[0]) . '.' . explode('.', $new_avatar['name'])[1];

        $con = $this->database_connection();
        try {
            $sql = "UPDATE users SET `avatar`='$imagenamehash' WHERE `id`=$id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }

        if ($this -> __save_image($new_avatar, $imagenamehash)) {
            $_SESSION['avatar'] = $imagenamehash;
            return true;
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