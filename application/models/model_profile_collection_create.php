<?php

class Model_Profile_Collection_Create extends Model
{
    private $result;

    public function create_collection() 
    {
        $userid = $_SESSION['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $imagenamehash = md5(explode('.', $_FILES['file']['name'])[0] . date("H:i:s")) . '.' . explode('.', $_FILES['file']['name'])[1];
        if (!$this -> __save_image($_FILES['file'], $imagenamehash)) {
            return false;
        }

        // Создадим коллекцию
        $con = $this->database_connection();
        try {
            $sql = "INSERT INTO collections(name, description, image, user_id) VALUES ('$name', '$description', '$imagenamehash', $userid);";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
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