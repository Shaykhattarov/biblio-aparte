<?

class Model_Collection_Remove extends Model 
{
    public $result;

    public function remove_collection()
    {
        $id = $_GET['id'];

        // Создадим коллекцию
        $con = $this->database_connection();
        try {
            $sql = "DELETE FROM collections WHERE `id`=$id ;";
            $this -> result = mysqli_query($con, $sql);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }

        return true;
    }

}

?>