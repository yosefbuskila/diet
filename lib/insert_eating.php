<?php
require_once 'conectdb.php';
class insert_eating extends conectdb{
    public function __construct(){
    parent::__construct();
}
    public function insertEat(){
            $stmt= $this->prepare("insert into `yosefbus_diet`.`eat`(`foodid`,`timeeat`,`grams`,`userid`,`footage`) value( :foodid , :timeeat , :grams , :userid , :footage )");
            $stmt->bindParam(':foodid', $_REQUEST['foodid']);
            $stmt->bindParam(':timeeat', $_REQUEST['timeeat']);
            $stmt->bindParam(':grams',$_REQUEST['grams'] );
            $stmt->bindParam(':userid', $_SESSION["user_name"]);
            $stmt->bindParam(':footage',$footage);
            $footage=$this->getFootage();
            return $stmt->execute();
        } 
        public function getFootage(){
            $stmtFootage=$this->prepare('SELECT id FROM yosefbus_diet.footages where `footage`= :footage ');
            $stmtFootage->bindParam(':footage', $_REQUEST['footage']);
            $stmtFootage->execute();
            if($stmtFootage->rowCount()!=1)
                exit ('error');
            return $stmtFootage->fetch()[0];
        }
}