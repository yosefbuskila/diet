<?php
class addNewFood {
    public function __construct() {
        require_once 'lib/insert_food_name.php';
        require_once 'lib/chack_user.php';
        if(!isset($_REQUEST['name'])||!isset($_REQUEST['cup'])||!isset($_REQUEST['tablespoon'])||!isset($_REQUEST['teaspoon'])||!isset($_REQUEST['Calories']))
            exit ('missing parameter');
        $foodobj=new insert_food_name();
        if($foodobj->insertFood())
        echo 'OK';
    }
}