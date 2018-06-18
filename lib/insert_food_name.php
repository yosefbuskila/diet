<?php
require_once 'conectdb.php';
class insert_food_name extends conectdb{
    public function __construct(){
    parent::__construct();
}
    public function insertFood(){
            $stmt= $this->prepare("INSERT INTO `yosefbus_diet`.`foods`(`name`,`cup`,`tablespoon`,`teaspoon`,`userid`,`Calories`)VALUES(:name,:cup,:tablespoon,:teaspoon,:userid,:Calories)");
            $stmt->bindParam(':name', $_REQUEST['name']);
            $stmt->bindParam(':cup', $_REQUEST['cup']);
            $stmt->bindParam(':tablespoon',$_REQUEST['tablespoon'] );
            $stmt->bindParam(':teaspoon',$_REQUEST['teaspoon'] );
            $stmt->bindParam(':Calories',$_REQUEST['Calories'] );
            $stmt->bindParam(':userid', $_SESSION["user_name"]);
            return $stmt->execute();
        } 
}