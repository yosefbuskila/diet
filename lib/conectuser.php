<?php
require_once 'conectdb.php';
class conectuser extends conectdb{
    
    
    public function __construct(){
    parent::__construct();
}
    public function login($user_name,$password){
        $stmt =$this->prepare("SELECT id FROM diet.users where email= :user_name and password= :password");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
            $result = $stmt->fetchAll();
            //print_r($result);
            //echo $result[0][0];
        if($stmt->rowCount()==1){
            $token=$this->random_password(64);
            $stmt= $this->prepare("INSERT INTO diet.log_in (`id`, `token`) VALUES ( :user_name , :token );");
            $stmt->bindParam(':user_name', $result[0][0]);
            $stmt->bindParam(':token', $token);
            $stmt->execute();
//            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//            $result = $stmt->fetchAll();
//            print_r($result);
            session_start();
//            echo 'ddd';
//            echo '#1'.$_SESSION["token"].'<br>';
            $_SESSION["token"]=$token;
//            echo '#2'.$token;
//            echo '#3'.$_SESSION["token"].'<br>';
            $_SESSION["user_name"]=$result[0][0];
            return TRUE;
        }        
    }
    public function chackconect(){
        if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
        $stmt =$this->prepare("SELECT id FROM diet.log_in where id = :id and token = :token and time > :time");
        $stmt->bindParam(':id', $_SESSION["user_name"]);
        //echo $_SESSION["token"].'<br>';      
        $stmt->bindParam(':token', $_SESSION["token"]);
        $stmt->bindParam(':time',$time_Yesterday );
        $time_Yesterday=date ("Y-m-d H:i:s", time()-(24*60*60));
        //echo "<br> username:{$_SESSION["user_name"]} tokken: {$_SESSION["token"]} <br>";
        $stmt->execute();
        if($stmt->rowCount()==1){
            return TRUE;;
        }
        return FALSE;
    }
    public function logout() {
        
    }
    private function random_password( $length = 50 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
}
//$ddd=new conectuser();
//echo $ddd->login('ww', 6);
//echo '<hr>';
//
////$_SESSION["token"]="ddds";
////echo $_SESSION["token"].'<br>';
//echo  $ddd->chackconect();