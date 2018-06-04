<?php
class home{
    public function __construct() {
        require_once 'lib\conectuser.php';
        require_once 'lib\eatinday.php';
        $conectuserobj=new conectuser();
        if($conectuserobj->chackconect()){
            require_once 'views\homeheader.php';
            require_once 'views\listday.php';
            $eatiniday=new eatinday();
//            echo '<br><br><br><br><br><br>';
//            print_r( $eatiniday->getdatetodays("2018/05/08", "2018/05/09"));
            require_once 'views\homefooter.php';
        } else   header("Location: Login/");;       
    }
    private function getdatatoday(){
        
    }
}
