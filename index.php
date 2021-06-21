<?php

//Config dosyası init etme

include 'system/libs/Bootstrap.php';
include 'system/libs/Controller.php';
include 'system/libs/Load.php';
include 'system/libs/Session.php';
include 'system/libs/Model.php';
include 'system/libs/Database.php';

/*
//Bootstrap
function autoload($classname) {
    $filename = "system/libs/". $classname .".php";
    include_once($filename);
}*/
include_once 'app/config/config.php';
//spl_autoload_register('autoload');
$boot= new Bootstrap();

?>

