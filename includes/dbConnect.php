<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "reinovo";
    private $from_email= "noreply@reinevoplaza.com.com";
    private $notify_email= "contact@reinevoplaza.com.com";
    private $conn;

    function __construct() {
        if($_SERVER['SERVER_NAME']=="reinevoplaza.com"||$_SERVER['SERVER_NAME']=="www.reinevoplaza.comm"){
            $this->host = "localhost";
            $this->user = "u6daj3gm8rxlp";
            $this->password = "u3!GIE1=]#qm";
            $this->database = "dbfpdgxqb2hg0a";
        }

        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function checkValue($value) {
        $value=mysqli_real_escape_string($this->conn, $value);
        return $value;
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function insertQuery($query) {
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    function from_email(){
        return $this->from_email;
    }

    function notify_email(){
        return $this->notify_email;
    }

    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
