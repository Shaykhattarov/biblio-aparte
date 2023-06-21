<?

class Model_Collection_Append extends Model
{
    private $result;

    function append_collection() 
    {
        $collection_id = $_GET['id'];
        $referer_id = $_GET['referer'];

        $con = $this->database_connection();
        try {
            $sql_check_user = "INSERT INTO collection_items(collection_id, book_id) VALUES ('$collection_id', '$referer_id');";
            $result = mysqli_query($con, $sql_check_user);
        } catch (mysqli_sql_exception $err) {
            error_log($err, 0);
            return false;
        }

        return true;
    }
}

?>