<?php
class getfoods {
    public function __construct() {
        require_once 'lib/eatinday.php';
        require_once 'lib/chack_user.php';
        if(!isset($_REQUEST['date']))
            exit ('missing parameter');
        $eatiniday=new eatinday();
        $eatlist = $eatiniday->getdatetodays($_REQUEST['date'], $_REQUEST['date']);
//        exit();
        $strjson= json_encode($eatlist);
        echo $strjson;
    }
}

