<?php
require_once 'conectdb.php';
class eatinday extends conectdb {
    public function __construct() {
        parent::__construct();
    }
    public function getdatetodays($firstdat,$lastday){
        $lastday.=" 23:59:59";

        $stmt =$this->prepare("SELECT TIME_FORMAT(`eat`.`timeeat`, '%H:%i')  as 'timeeat' ,
  ROUND(case `footages`.`footage` when 'gram' then  `eat`.`grams` when 'cup' then `eat`.`grams`/`foods`.`cup`  when 'tablespoon' then `eat`.`grams`/`foods`.`tablespoon`  when 'teaspoon' then `eat`.`grams`/`foods`.`teaspoon`  end ,1) as amound
, `foods`.`name` ,`foods`.`Calories` ,`footages`.`footage`, FORMAT(`eat`.`grams`*`foods`.`Calories`/100,0) as sum_cal 
        FROM `diet`.`eat` INNER JOIN `diet`.`foods` on eat.foodid=foods.id INNER JOIN `diet`.`footages` on eat.footage=footages.id
        where `eat`.`userid`= :id and `eat`.`timeeat` between  :firstdat  and  :lastday  ");//"SELECT id FROM diet.users where email= :user_name and password= :password");
        $stmt->bindParam(':id', $_SESSION["user_name"]);
        $stmt->bindParam(':firstdat', $firstdat);
        $stmt->bindParam(':lastday', $lastday);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
