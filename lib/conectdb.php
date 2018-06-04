<?php
class conectdb extends PDO {
    private $servername = "localhost";
    private $username = "root";
    private $password="";
    
    
    public function __construct(){
    try {
    parent::__construct("mysql:host=$this->servername", $this->username, $this->password);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
}
