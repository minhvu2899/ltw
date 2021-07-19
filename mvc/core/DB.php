<?php
class DB{
    public $con;
    protected $servername="localhost";
    protected $username="root";
    protected $password="";
    protected $dbname="ltw";
    public function __construct() {
        $this->con=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        // mysqli_select_db($this->con,$this->dbname)
        // mysqli_query($this->con,"SET NAMES 'utf-8'");
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        } 
    }
}

?>

