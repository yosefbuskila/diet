<?php
class home{
    public function __construct() {
        require_once 'lib/conectuser.php';
        require_once 'lib/eatinday.php';
        $conectuserobj=new conectuser();
        if($conectuserobj->chackconect()){
            require_once 'views/homeheader.php';
            require_once 'views/home_content.php';
            echo '<br><br><br><br><br><br>';
            
            require_once 'views/homefooter.php';
        } else   header("Location: Login/");;       
    }
}
