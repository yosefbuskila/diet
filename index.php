<?php
$controller=isset($_REQUEST['controller']) ?  $_REQUEST['controller']:'home';
require_once $controller.'.php';
$controlerobj=new $controller;