<?php

class getfoods {
    public function __construct() {
        $arrlist=array('one','two','three');
        $strjson= json_encode($arrlist);
        echo $strjson;
    }
}
new getfoods;
