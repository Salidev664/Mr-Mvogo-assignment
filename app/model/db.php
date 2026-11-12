<?php
class Bd{
private $host = "localhost";
private $user = "root";
private $password = "";
private $dbName = "crud";

public $conn;

public function __construct(){
$ds = 'mysql:host=' . $this->host. ';dbname=' .$this->dbName.';charset=utf8';

$option = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try{
    $this->conn = new PDO($ds, $this->user, $this->password, $option);
   
    
}
catch(PDOException $e){
    echo $e->getMessage();
}
}

}
?>