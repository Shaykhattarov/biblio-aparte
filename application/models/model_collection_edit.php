<?php

class Model_Collection_Edit extends Model 
{
    private $result;

    public function change_image() 
    { 
        $id = $_GET['id'];
        $imagenamehash = md5(explode('.', $_FILES['file']['name'])[0] . date("H:i:s")) . '.' . explode('.', $_FILES['file']['name'])[1];
        if (!$this -> __save_image($_FILES['file'], $imagenamehash)) {
            return false;
        }

        // Создадим коллекцию
        $con = $this->database_connection();
        try {
            $sql = "UPDATE collections SET `image`='$imagenamehash' WHERE `id`=$id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }
    }

    public function change_name()
    {
        $id = $_GET['id'];
        $name = $_POST['name'];

        // Создадим коллекцию
        $con = $this->database_connection();
        try {
            $sql = "UPDATE collections SET `name`='$name' WHERE `id`=$id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }

        return true;
    }

    public function change_description()
    {
        $id = $_GET['id'];
        $description = $_POST['description'];

        // Создадим коллекцию
        $con = $this->database_connection();
        try {
            $sql = "UPDATE collections SET `description`='$description' WHERE `id`=$id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }

        return true;
    }

    public function get_collection() 
    {
        $id = $_GET['id'];
        
        // Получим списко коллекций
        $con = $this->database_connection();
        try {
            $sql = "SELECT * FROM collections WHERE `id`=$id ;";
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

    private function __save_image($image, $hash) {
        $uploaddir = IMAGEDIR . "collections/";
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

?>