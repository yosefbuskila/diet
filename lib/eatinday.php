<?php
require_once 'conectdb.php';
class eatinday extends conectdb {
    public function __construct() {
        parent::__construct();
        echo 'ddd';
    }
    public function getdatetodays($firstdat,$lastday){
//        $sql="SELECT `eat`.`timeeat` ,`eat`.`grams` , `foods`.`name` ,`foods`.`Calories` ,`footages`.`footage`, FORMAT(`eat`.`grams`*`foods`.`Calories`/100,0) as sum_cal 
//        FROM `diet`.`eat` INNER JOIN `diet`.`foods` on eat.foodid=foods.id INNER JOIN `diet`.`footages` on eat.footage=footages.id
//        where `eat`.`id`= {$_SESSION["user_name"]} and `eat`.`timeeat` between $firstdat  and $lastday ";
        $stmt =$this->prepare("SELECT `eat`.`timeeat` ,`eat`.`grams` , `foods`.`name` ,`foods`.`Calories` ,`footages`.`footage`, FORMAT(`eat`.`grams`*`foods`.`Calories`/100,0) as sum_cal 
        FROM `diet`.`eat` INNER JOIN `diet`.`foods` on eat.foodid=foods.id INNER JOIN `diet`.`footages` on eat.footage=footages.id
        where `eat`.`userid`= :id and `eat`.`timeeat` between  :firstdat  and  :lastday  ");//"SELECT id FROM diet.users where email= :user_name and password= :password");
        $stmt->bindParam(':id', $_SESSION["user_name"]);
        $stmt->bindParam(':firstdat', $firstdat);
        $stmt->bindParam(':lastday', $lastday);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
