<?php
require_once 'conectdb.php';
class foods_name extends conectdb {
    public function __construct() {
        parent::__construct();
    }
    public function getFoodsName(){
        $stmt =$this->prepare("SELECT `id`,`name` , `Calories`,`cup`,`tablespoon`,`teaspoon` FROM yosefbus_diet.foods where (`foods`.`userid` =:id or  `foods`.`userid` =0)  and name like  :foodSerch  ");
        $stmt->bindParam(':id', $_SESSION["user_name"]);
//        $stmt->bindParam(':foodSerch', $_REQUEST["foodSerch"]);
        $foodSerch="%".$_REQUEST['foodSerch']."%";
        $stmt->bindParam(':foodSerch', $foodSerch);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
