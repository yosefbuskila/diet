<?php
class getFoodsList {
    public function __construct() {
        require_once 'lib\foods_name.php';
        require_once 'lib\chack_user.php';
        if(!isset($_REQUEST['foodSerch']))
            exit ('missing parameter');
        $eatiniday=new foods_name();
        $eatlist = $eatiniday->getFoodsName();
        $strjson= json_encode($eatlist);
        echo $strjson;
    }
}

