<?php
class insertEating {
    public function __construct() {
        require_once 'lib\insert_eating.php';
        require_once 'lib\chack_user.php';
        if(!isset($_REQUEST['footage'])||!isset($_REQUEST['foodid'])||!isset($_REQUEST['timeeat'])||!isset($_REQUEST['grams']))
            exit ('missing parameter');
        $eating=new insert_eating();
        if($eating->insertEat())
        echo 'OK';
    }
}

