<?php
require_once 'conectdb.php';
class cal_in_day extends conectdb {
    public function __construct() {
        parent::__construct();
        $stmt =$this->prepare("SELECT cal_day FROM yosefbus_diet.users where id=:id");
        $stmt->bindParam(':id', $_SESSION["user_name"]);
        $stmt->execute();
        if($stmt->rowCount()==1){
            $result = $stmt->fetchAll();
            echo "<script> var cal_day= ".$result[0][0].";</script>";
        }
    }
}
