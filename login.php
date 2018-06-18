<?php

class login {
    public function __construct() {
        require_once 'lib/conectuser.php';
        $conectuserObj=new conectuser();
        if ( $conectuserObj->login($_REQUEST['username'], $_REQUEST['pass'])){
//            require_once 'home.php';
//            $homeobj=new home();
            
            echo 'OK';
        } else {
            echo 'unknown';
        }
    }
}
