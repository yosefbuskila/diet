<?php
require_once 'conectuser.php';
$conectuserobj=new conectuser();
        if(!$conectuserobj->chackconect()){
            header("Location: Login/");
            exit();
        }
